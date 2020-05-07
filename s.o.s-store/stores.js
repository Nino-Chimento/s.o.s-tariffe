$(document).on("click",".btn-green",function(){
   var id =  $(this).attr("value");
 
    var source = $("#entry-template2").html();
    var template = Handlebars.compile(source);
    $.ajax(
        {
            url: "http://localhost/s.o.s-store/stores.php",
            method: "GET",
            data:{
                id:id
            },
            success: function (data, stato) {
                $(".wrap").html("");
               //controllo se l'array e'vuoto
                if (data.storesFilters == 0){
                    $("h1").text("Non ci sono Magazzini da rifornire")
                }else{
                    for (var i = 0; i < data.storesFilters.length; i++) {
                        var context = {
                            "idProduct": data.idProduct,
                            "name": data.storesFilters[i]["name"],
                            "distance": data.storesFilters[i]["distance"],
                            "qtyOrder": data.storesFilters[i]["qtyOrder"]
                        }   
                        var html = template(context);
                        $(".wrap").append(html);
                    }
                }
            },

            error: function (richiesta, stato, errori) {
                alert("E' avvenuto un errore. ");
            }
        }
    );
   
})
               
                
//creo overlay
$(document).on("click",".btn-magazine",function(){
    var name = $(this).siblings("h2").text();
    var idProduct = $(this).siblings(".idProduct").attr("value");
    var qtyOrder = $(this).siblings(".qtyOrder").attr("value");
    var source = $("#overlay").html();
    var template = Handlebars.compile(source);
    var context= {
        "idProduct":idProduct,
        "name":name,
        "qtyOrder":qtyOrder
    }
    var html = template(context);
    $(".cover").addClass("opacity").removeClass("hide");
    $("box-magazine").addClass("overlay");
    $(".wrap").append(html);
})

// chiudo overlay
$(document).on("click",".closed",function(){
    $(this).parent(".item").hide();
    $(".cover").addClass("hide").removeClass("opacity");
})
   
    
    
   


                
               

