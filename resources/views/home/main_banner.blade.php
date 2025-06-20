<!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">

         @if(session()->has('message'))

          <div class="alert alert-success">

            

          {{session()->get('message')}}

          <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

        </div>


          

         @endif
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Life Is Better With Book</h6>
            <h2>Book is Knowledge</h2>
            <p>The more that you read, the more things you will know. The more you learn, the more places you'll go. For book lovers.</p>
            <div class="buttons">
              <div class="border-button">
                <a href="{{url('explore')}}">Explore Top Books</a>
              </div>
              <div class="main-button">
                <a href="{{url('/')}}" target="_blank">Welcome to Library</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="">
            <div class="item">
              <img src="assets/images/banner.JPG" alt="">
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->