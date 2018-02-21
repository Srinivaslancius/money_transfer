<footer class="footer"><span class="heading-font-family"> Desain & Dikembangkan Oleh Solusi TI Lancius</span>
	<script>
      var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        
      };
      var loadFile1 = function(event) {
        var output1 = document.getElementById('output1');
        output1.src = URL.createObjectURL(event.target.files[0]);
      };

      //check status active or not
        $(".check_active").click(function(){
          var check_active_id = $(this).attr("data-incId");
          var table_name = $(this).attr("data-tbname");
          var current_status = $(this).attr("data-status");
          if(current_status == 0) {
            send_status = 1;
          } else {
            send_status = 0;
          }
          $.ajax({
            type:"post",
            url:"changestatus.php",
            data:"check_active_id="+check_active_id+"&table_name="+table_name+"&send_status="+send_status,
            success:function(result){  
              if(result ==1) {
                //alert("Your Status Updated!");
                //location.reload();
                window.location = "?msg=success";
              }
            }
          });
        }); 
      //Set time for messge notifications
      $(document).ready(function () {
        setTimeout(function () {
          $('#set_valid_msg').hide();
        }, 2000);
      });
    </script>
    <script type="text/javascript">
      function checkUserAvailTest() {
        var userInput = document.getElementById("user_input").value;
        var table = document.getElementById("table_name").value;
        var columnName = document.getElementById("column_name").value;
        if (userInput){
          $.ajax({
          type: "POST",
          url: "common_user_avail_check.php",
          data: {
            userInput:userInput,table:table,columnName:columnName,
          },
          success: function (response) {
            if (response > 0){
              $('#input_status').html("<span>Sudah ada</span>");
              $("#user_input").val("");
            } else {
              $('#input_status').html("");        
            }
          }
          });          
        }
      }
    </script>
</footer>