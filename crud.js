
$(document).ready(function(){           //jquery code
   //get all employy
   getAllEmployee();
   
    function getAllEmployee()
    {
        $.ajax({
            url: "get_all_employee.php",
            method: "POST",
            dataType: "json",
            success: function(res){
                //console.log(res);
                 getUser(res.userdata);
            }

        })
    }
    function getUser(response){
        var data = "";
        $.each(response, function(index,value){
            data += "<tr>";
            data += "<td>"+(index+1)+"</td>";
            data += "<td>"+value.name+"</td>";
            data += "<td>"+value.emailid+"</td>";
            data += "<td>"+value.password+"</td>";
            data += "<td>"+value.company_name+"</td>";
            data += "<td data-attr="+value.id+"><button class='btn btn-info btnEdit' id='edit'>edit</button>";
            data += "<button class='btn btn-danger btnDel ml-2' id='delete'>Delete</button></td>";
            data += "</tr>";
            
        });
        $("tbody").html(data);

    }

//Add Employee
$("#btnAddEmployee").click(function(){
    $.ajax({
        url: "addemployee.php",  
        method: "POST",
        data: $("#frm").serialize(),  
        success: function(res){
            toastr.success(res,'Success', {timeOut: 3000});
            getAllEmployee();
            $("#myModal").modal("hide");
            $("#name").val("");
            $("#email").val("");
            $("#pass").val("");
            $("#cnm").val("");

        }
    })

})
  //Delete Employee 
  $("body").on("click", ".btnDel", function(){
    var id = $(this).parent("td").data("attr");
    // alert(id);
    $.ajax({
        url: "delete_employee.php",
        method: "post",
        data: {uid: id},
        success: function(res){
            // alert(res.userdata.msg);
            $(this).parent("td").parent("tr").remove();
            getAllEmployee();
            toastr.success(res,'Success', {timeOut: 3000});
            
        }
    });

    });
    //edit code
    $("body").on('click',".btnEdit", function(){
        var id = $(this).parent("td").data("attr");
         var name = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
         var eid = $(this).parent("td").prev("td").prev("td").prev("td").text();
         var pass = $(this).parent("td").prev("td").prev("td").text();
         var cnm = $(this).parent("td").prev("td").text();
         $("#vid").val(id);
         $("#name").val(name);
         $("#email").val(eid);
         $("#pass").val(pass);
         $("#cnm").val(cnm); 
         $("#mymodal").modal("show");
         $("#btnAddEmployee").show();
         $("#btnEditEmployee").show();

    });
    //update cod
    $("#btnEditEmployee").click(function(){
        $.ajax({
            url: "edit_employee.php",
            method: "post",
            data: $("#frm").serialize(),
            success: function(res){
                $("#name").val("");
                $("#email").val("");
                $("#pass").val("");
                $("#cnm").val("");

                toastr.success(res,'Success', {timeOut: 3000});
            getAllEmployee();
            $("#mymodal").modal("hide");
            }

        })
    });
    //create button code

    $("#btnCreate").click(function(){
         $("#btnAddEmployee").show();
        $("#btnEditEmployee").show();

    })

        
     })
     

































     
  


