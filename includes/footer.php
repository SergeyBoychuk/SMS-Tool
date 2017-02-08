                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="../public/js/jribbble.min.js"></script>
 <script>
    

  

$('#formsub').submit(function() {

    var username = document.getElementById('message').value;
     $.jribbble.setToken('');
    
    
    $.jribbble.users(username).shots({per_page: 1}).then(function(shots) {
    var html = [];

  
  shots.forEach(function(shot) {
    html.push('<li class="shot">');
    html.push('<a id="link" href="' + shot.html_url + '" target="_blank">'); 
    html.push('<img src="' + shot.images.normal + '">');
    html.push('</a></li>');
  });
  
  $('.shot').html(html.join(''));
  var href = $('#link').attr('href');
    $('#brad').val() = href;

    return true;

  });
  });





 

  




  


  </script>
</body>
</html>
