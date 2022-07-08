<style>
.cookis-box {
  background: #000000;
  color: #FFF;
  opacity: 0.9;
  width: 80%;
  top: 20px;
  left: 10%;
  z-index: 9999;
  height: 400px;
  position: fixed;/* Stoi w jednym miejscu niezaleznie od strony */
}
.cookis-box .container {
  text-align: center;
  margin-top: 20px;
  padding-top: 20px;
  padding-bottom: 20px;
}

.cookis-box .cookie-history{
  float:right;
  padding: 10px;
  cursor: pointer;
}

</style>
<div class="cookis-box">
    <div class="cookis-history">
        <i class="bi bi-clock-history"></i>
    </div>
    <div class="container">
        <div class="card bg-dark">
            <div class="card-header text-center h2">
                <h2>Polityka Prywatności Cookis</h2>
            </div>
            <div class="card-body"> 
                <p class="card-text">Witaj Nieznajomy.</p>
                <p class="card-text">Jeżeli chcesz zostać i przeglądać dalej stronę to zakceptuj ( Cookie! ).</p> 
                <p class="card-text">Cały Polityka Prywatności tu: <a href="{{ route("politykaPrywatnosci") }}">Polityka Prywatności</a></p>         
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-danger py-3 accept-cookis">Zezwalaj na cookis!</button>
            </div>
        </div>
    </div>
</div>
    
<script>
    
    const nameCookis  = '{{ $cookis[1] }}';
    const coc         = '{{ $cookis[0] }}';

    if(coc != 1 || coc == 'undefined'){    
        $(".accept-cookis").click(function(){
            
            setCookis(nameCookis); 
            
            $(".cookis-box").hide();
            return;
        });
    }  
       
    function setCookis(name) {                  
                const value = '{{ $cookis[2] }}';
              // Save
                document.cookie = name + '=' + value
                    + '; max-age='+(360 * 24 * 60 * 60)
                    + '; path=/'
                    + '; samesite= Lax';
    }
                 
</script>
