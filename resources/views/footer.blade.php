<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });


    function sendUrl() {
        var url = document.getElementById('url').value;
        console.log(url);

        postUrl = {
            "url": url
        };

        $.ajax({
            type: "POST",
            url: 'http://127.0.0.1:8000/api/down-videos',
            data: postUrl,
            beforeSend : () => {
                $('#img-down').css('display','none');
                $('#loader-url').css('display', 'block')
                $('.btn-down-now').css('padding', '10px');
            },
            success: (success) => {
                window.location.href = success.urlbakc + '&dl=1';
            },

            complete: (response) => {
                
                $('.btn-down-now').css('padding', '0');
                $('#img-down').css('display','block');
                $('#loader-url').css('display', 'none');
                $('input').val(''); 
            },
            error: (e) => {
                console.log(e);
                alert('Error no processo, verifique sua URL e tente novamente!');
            },
            dataType: 'json'
        });
    }

    function sendUrlImages() {
        var url = document.getElementById('url').value;
        console.log(url);

        postUrl = {
            "url": url
        };

        $.ajax({
            type: "POST",
            url: 'http://127.0.0.1:8000/api/down-images',
            data: postUrl,
            beforeSend : () => {
                $('#img-down').css('display','none');
                $('#loader-url').css('display', 'block')
                $('.btn-down-now').css('padding', '10px');
            },
            success: (success) => {
                window.location.href = success.urlbakc + '&dl=1';
            },

            complete: (response) => {
                
                $('.btn-down-now').css('padding', '0');
                $('#img-down').css('display','block');
                $('#loader-url').css('display', 'none');
                $('input').val(''); 
            },
            error: (e) => {
                console.log(e);
                alert('Error no processo, verifique sua URL e tente novamente!');
            },
            dataType: 'json'
        });
    }
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });



</script>

</html>
