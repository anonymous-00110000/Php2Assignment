@extends('layout.nav')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

          <h1>What is MVC Pattern ?</h1>
          <h2>( MVC Stands for Model, View, Controller. )</h2>
          <div class="d-lg-flex">
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn-get-started scrollto">Read More About MVC</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('logo/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="exampleModalLabel">Information About MVC Pattern</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body container">
            <div class=" text-center">

            <img src="{{ asset('logo/mvc_1321.png') }}" class="img-fluid"  alt="Responsive image">
            </div>
            <span>
               <p> Stands for "Model-View-Controller." MVC is an application design model comprised of three interconnected parts. They include the model (data), the view (user interface), and the controller (processes that handle input).</p>
               <p> The MVC model or "pattern" is commonly used for developing modern user interfaces. It is provides the fundamental pieces for designing a programs for desktop or mobile, as well as web applications. It works well with object-oriented programming, since the different models, views, and controllers can be treated as objects and reused within an application.
                Below is a description of each aspect of MVC: </p>
            </span>
            <div id="accordion" class="myaccordion">
                <div class="card">
                  <div class="card-header border-bottom-0" id="headingOne">
                    <h2 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        1. Model
                        <span class="fa-stack fa-sm">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                     <p>The model is the central component of the pattern. It is the application’s dynamic data structure, independent of the user interface. It corresponds to all the data-related logic that the user works with. It directly manages the data, logic and rules of the application.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header border-bottom-0" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. View
                        <span class="fa-stack fa-2x">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <p>A view can be any output representation of information, such as a chart or a diagram. Multiple views of the same information are possible, such as a bar chart for management and a tabular view for accountants.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3. Controller
                        <span class="fa-stack fa-2x">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      <p>The third part or section, the controller, accepts input and converts it to commands for the model or view. It acts as an interface between Model and View components to process all the business logic and incoming requests, manipulates data using the Model component and interacts with the Views to render the final output.</p>
                    </div>
                  </div>
                </div>
              </div>
              <span>
                  <p>
                    The three parts of MVC are interconnected (see diagram above). The view displays the model for the user. The controller accepts user input and updates the model and view accordingly. While MVC is not required in application design, many programming languages and IDEs support the MVC architecture, making it an common choice for developers.
                  </p>
              </span>
        </div>
      </div>
    </div>
  </div>


@endsection
