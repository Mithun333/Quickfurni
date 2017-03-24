var abc = 0; //Declaring and defining global increement variable
var count = 1;
$(document).ready(function() {

//To add new input file field dynamically, on click of "Add More Files" button below function will be executed
    $('#add_more').click(function() {
        if(count > 2)
        { 
            $('#add_more').hide();
            alert("Ohhhh...!!! Sorry.. No More than 5 Uploads");
        }else{
                count += 1;
          
        }
    });

$(function(){
       $("input").prop('required',true);
});
//following function will executes on change event of file input to select different file	
$('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                abc += 1; //increementing global variable by 1
				
				var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<li id='abcd"+ abc +"' class='abcd' style='display: inline-block;'><img style='height: 100px;width: 100px;margin-left: 162px; padding: 5px;' id='previewimg" + abc + "' src=''/></li>");
               
			    var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
               
			   
              
            }
        });

//To preview image     
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name)
        {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
});