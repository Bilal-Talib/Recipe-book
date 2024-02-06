<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipe Book</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


        <!-- Styles -->
        <style>


        </style>
    </head>

    <body> 
      

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#43df96;">
            <div class="container">
              <a class="navbar-brand"  href="#"><img src="images/logo.png"  style="width:30px; height:30px;"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                @if(Auth::check())
                <!-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     
                                    </a> -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button class="btn btn-outline-light">{{ __('Logout') }}</button>
                                    </form>
                                    @else                      
                <a href="{{ route('login') }}" class="btn btn-outline-light" style="">Login</a>
                @endif
              
              </div>
            </div>
          </nav>
    

          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="images/image1.jpg" style="border-radius: 30%" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-5">
              <h1 class="display-5 fw-bold lh-1 mb-3">A recipe has no soul.....</h1>
              <p class="lead">If you are a chef, no matter how good a chef you are, it's not good cooking for yourself; the joy is in cooking for others.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-lg px-4 me-md-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #43df96">Add Recipie</button>
                
                <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Add Recipie Here</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method='POST' action="{{route('add')}}">
                        @csrf 
                        <div class="mb-3">
                          <label for="recipient-name" class="col-from-label">Recipe Title</label>
                          <input type="text" class="form-control" id="recipent-name" name="title">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-from-label"> Recipe Descripition</label>
                          <input type="text" class="form-control" id="message-text" name="description">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-from-label">Recipe Image</label>
                          <input type="file" class="form-control" id="message-text" name="img">
                        </div>
                        <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>

                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
             
              </div>
            </div>
          </div>


          <div class="row row-cols-1 row-cols-md-3 g-4">

          @foreach ($data as $item)
            <div class="col">
              <div class="card h-100">
                <img src="images/imaage3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->title}}</h5>
                  <p class="card-text">{{$item->desp}}</p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success">{{$item->id}}</button>
                  <a href="{{url('/detail/'.$item->id)}}"><button type="button" class="btn btn-success">View Detail</button></a>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
              </div>
            </div>
            @endforeach

            <!-- <div class="col">
              <div class="card h-100">
                <img src="images/imaage3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success">View Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="images/imaage3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success">View Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
              </div>
            </div> -->
          </div>
           

          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2024 Company, Inc</p>
        
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="images/logo.png"></use></svg>
            </a>
        
            <ul class="nav col-md-4 justify-content-end">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
          </footer>


    </body>
</html>
