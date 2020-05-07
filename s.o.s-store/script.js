$(document).ready(function(){
    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);
    // chiamo pagina php e stampo i risultati
    $.ajax(
        {
            url: "http://localhost/s.o.s-store/items.php",
            method: "GET",
            success: function (data, stato) {
              //ordino alfabeticamente
              data.sort(function (el1, el2) {
                  return compare(el1, el2, "name")
              })
              for( var i = 0; i< data.length; i++){
                 
                  var context = data[i];
                  var html = template(context);
                  $(".wrap").append(html);
              }
          },
          error: function (richiesta, stato, errori) {
              alert("E' avvenuto un errore. ");
          }
      }
               
  );
});
        // filtragio con inserimento        
$(".search").keypress(function(){
    var value = $(".search").val().toLowerCase();
    $(".item").each(function () {
        var name = $(this).find("h2").text().toLowerCase();
        var description = $(this).find("p").text().toLowerCase();
        if (name.includes(value) || description.includes(value)) {
            $(this).show();

        } else {
            $(this).hide();
        }


    })

})             
   
       
                
                
              
                
                
               
// filtro per nome prodotto e descrizione 
$(".filter").click(function(){
    var value = $(".search").val().toLowerCase();
    $(".search").val(" ");
    $(".item").each(function(){
        var name = $(this).find("h2").text().toLowerCase();
        var description = $(this).find("p").text().toLowerCase();
        if (name.includes(value) || description.includes(value)){
            $(this).show();
            
        }else{
            $(this).hide();
        }
      
        
    })
    
})
      

// function order 
function compare(el1, el2, index) {
    return el1[index] == el2[index] ? 0 : (el1[index] < el2[index] ? -1 : 1);
}      