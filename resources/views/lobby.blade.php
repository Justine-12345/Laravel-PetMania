@extends('layouts.base')
@section('body')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

<script type="text/javascript">
    $(document).ready(function(){

      $('#carouselExampleControls').hide();
      $('#m1').hide();

       $('#carouselExampleControls').fadeIn(2000, function(){$('#m1').fadeIn(1000);} );

    });

     $('[data-toggle="popover"]').popover();   

</script>


<div>

  <div id="carouselExampleControls" class="carousel slide"  data-interval="false" data-ride="carousel">

    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid d-block w-100" src="https://petsidi.com/wp-content/uploads/2018/07/beagle-hypoallergenic.jpg" alt="First slide" style="height: 657px; overflow: hidden; overflow-y: hidden; object-fit: cover; z-index: 0">
      <div id="m1" style="position: absolute; z-index: 10; top: 300px; left: 60%" >
      <h2 style="color: white; font-size: 30px">Welcome To PetMania

        <i class="fas fa-paw" style="font-size: 20px; padding-right: 0px; color: #f0f4f6; border: 3px dashed #f0f4f6; padding :7px; border-radius: 15px; margin-top: 0px; position: relative; bottom:10px;"
        ></i>

      </h2>

      <a href="{{ url('/index/')}}" class="btn btn-primary" style="font-size: 14px">Skip Introduction</a>


      </div>
    </div>


     <div class="carousel-item">
      <img class="img-fluid d-block w-100" src="https://www.purina.co.uk/sites/default/files/2020-12/Travelling%20with%20Dogs%20The%20Full%20ChecklistTEASER.jpg" alt="Second slide" style="height: 657px; overflow: hidden; overflow-y: hidden; object-fit: cover; z-index: 0">
      <div id="m1" style="position: absolute; z-index: 10; top: 195px; left: 15%" >
      <h2 style="color: #00537D; font-size: 30px"><i>"Home Of Healthy & Adoptable<br> Animals"</i>

       
      </h2>

      <a href="{{ url('/index/')}}" class="btn btn-primary" style="font-size: 14px">Skip Introduction</a>

      </div>
    </div>


   <div class="carousel-item">
      <img class="img-fluid d-block w-100" src="https://www.carrollbutlerdds.com/assets/images/banner-static.jpg" alt="Third slide" style="height: 657px; overflow: hidden; overflow-y: hidden; object-fit: cover; z-index: 0">
      <div id="m1" style="position: absolute; z-index: 10; top: 330px; left: 30%; right: 30%" >
      <h2 style="color: white; font-size: 30px"><i>"Friendly And Well Trained Staff"</i>

       
      </h2>

      <a href="{{ url('/index/')}}" class="btn btn-primary" style="font-size: 14px">Start Now</a>

      </div>
    </div>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
    <span style="font-size: 14px">Back</span>
    <span class="sr-only">Previous</span>
     
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    <span style="font-size: 14px">Next</span>
  </a>
</div>

</div>

                  

 
@stop





