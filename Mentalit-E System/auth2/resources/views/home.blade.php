@extends('layouts.app')
@section('content')
<div class="container">
	@if(session()->has('message'))
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	@elseif(session()->has('warning'))
		<div class="alert alert-danger">
			{{ session()->get('warning') }}
		</div>
	@endif
	<div class="row">
		<div class="col-lg-4 mt-5">
			<img src="img/logo.png" width=200>
			<p class="my-3">
				Welcome to the Philippines’ leading mental health services platform. Book now with our quick and manual booking features. 
				Register and choose your very own professional in the simplest and efficient way possible.
				Help us and become a medical professional to provide the best services for your potential patients.
			</p>
			<button type="submit" class="btn btn-outline m-3" >Be a User</button>
			<button type="submit" class="btn btn-outline m-3">Be a Medical Professional</button>		
		</div>


		<div class="col-lg-8">
			<img src="img/bg_img.jpeg" class="w-100">
		</div>
	</div>
</div>
</section>

<section> <!-- Second section Mental Health Awareness -->

	<div class="custom-shape-divider-top-1635023907">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
		</svg>
	</div>
	
	<br><br><br><br>

	<div class="container">
		<h1 class="text-center">Mental health awareness</h1>
		<br><hr class="divider"><br>
		
		<div class="d-flex justify-content-center bd-highlight">
			<div class="p-2 m-3 bd-highlight w-50 text-left">
				Infinitcare partners with businesses and HR leaders to provide relevant and timely mental 
				health support. Our services are founded on the principles of Education, Support and 
				Insights that allow organizations to effectively address mental health issues in the 
				workplace, build resilience among its employees, and increase productivity.
				<br><br>
				<a href="/booking" class="text-decoration-none">
					<button type="submit" class="btn btn-outline">Book an Appointment</button>	
				</a>				
			</div>
			<div class="p-2 m-3 bd-highlight">
				<img src="img/awareness01.png" width=150>
			</div>
		</div>

		<br><br>
		
		<div class="d-flex justify-content-center bd-highlight">
			<div class="p-2 m-3 bd-highlight">
				<img src="img/awareness02.png" width=150>
			</div>
			<div class="p-2 m-3 bd-highlight w-50 text-right">
				The University of the Philippines Diliman Psychosocial Services provides free 
				counseling and psychotherapy sessions. They are currently offering free telepsychotherapy 
				services to COVID frontliners, COVID-positive individuals, relatives of the frontliners, 
				and anyone who is deeply affected and disturbed by the pandemic.
				<br><br>
				<a href="/booking" class="text-decoration-none">
					<button type="submit" class="btn btn-outline">Book an Appointment</button>	
				</a>						
			</div>
		</div>	

		<br><br>	

		<div class="d-flex justify-content-center bd-highlight">
			<div class="p-2 m-3 bd-highlight w-50 text-left">
				PGH provides free psychiatric consultation and counseling services through personal 
				check-ups. Long queues are expected since this is a public hospital, but consultations 
				are available for 24 hours.
				<br><br>
				<a href="/booking" class="text-decoration-none">
					<button type="submit" class="btn btn-outline">Book an Appointment</button>	
				</a>				
			</div>
			<div class="p-2 m-3 bd-highlight">
				<img src="img/awareness03.png" width=150>
			</div>
		</div>	
		
		<br><br>	

		<div class="d-flex justify-content-center bd-highlight">
			<div class="p-2 m-3 bd-highlight">
				<img src="img/awareness04.png" width=150>
			</div>
			<div class="p-2 m-3 bd-highlight w-50 text-right">
				Amang Rodriguez Memorial Medical Center’s acute psychiatric unit offers free basic 
				psychiatric consultation and psychological testing. This clinic offers free psychological 
				services including assessment, evaluation, counseling, group or individual therapy of 
				the patient.
				<br><br>
				<a href="/booking" class="text-decoration-none">
					<button type="submit" class="btn btn-outline">Book an Appointment</button>	
				</a>						
			</div>
		</div>			
		
	</div>

	<br><br><br><br><br>

	<div class="custom-shape-divider-bottom-1635023936">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
		</svg>
	</div>

</section>

<section class="text-center"> <!-- Third section What does Mentalit-E do -->
<br><br><br><br>

	<div class="container">
		<h1>What does Mentalit-E do?</h1>
		<br><hr class="divider"><br><br><br>
		
		<div class="row">
			<div class="col-lg-4">
				<div class="card h-100 p-4">
					<img src="img/what01.png" class="img-fluid w-25 auto">
					<p class="mt-5">
						We aim to maintain a meaningful community where individuals can interact with 
						people who are aware of the existing mental health problems.
					</p>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="card h-100 p-4">
					<img src="img/what02.png" class="img-fluid w-25 auto">
					<p class="mt-5">
						We specialize in connecting individuals who are struggling with mental health 
						issues to the respective health professionals
					</p>					
				</div>		
			</div>

			<div class="col-lg-4">
				<div class="card h-100 p-4">
					<img src="img/what03.png" class="img-fluid w-25 auto">
					<p class="mt-5">
						We are passionate in addressing the needs of individuals in terms of factors 
						contributing towards their mental health.
					</p>					
				</div>		
			</div>		
		</div>
		
	</div>
	
<br><br><br><br>
</section>

<section class="text-center"> <!-- Fourth section Features & Services -->

	<div class="custom-shape-divider-top-1635023907">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
		</svg>
	</div>
	
	<br><br><br><br>
	
	<div class="container text-center my-3">
		<h1 class="text-center">Features and Services</h1>
		<br><hr class="divider"><br><br><br>
		
		<div class="row mx-auto my-auto justify-content-center">
			<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
			
				<div class="carousel-inner col-10 mx-auto" role="listbox">
				
					<div class="carousel-item active">
						<div class="col-md-3">
							<div class="card card-new carousel-product">
								<div class="card-img my-5">
									<img src="img/features01.png" class="img-fluid w-75">
								</div>
								<div class="caption">
									<p class="text-black">Booking</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card card-new carousel-product">
								<div class="card-img my-5">
									<img src="img/features02.png" class="img-fluid w-75">
								</div>
								<div class="caption">
									<p class="text-black">Forums</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card card-new carousel-product">
								<div class="card-img my-5">
									<img src="img/features03.png" class="img-fluid w-75">
								</div>
								<div class="caption">
									<p class="text-black">Journals</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card card-new carousel-product">
								<div class="card-img my-5">
									<img src="img/features04.png" class="img-fluid w-75">
								</div>
								<div class="caption">
									<p class="text-black">Patient Records Management</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card card-new carousel-product">
								<div class="card-img my-5">
									<img src="img/features05.png" class="img-fluid w-75">
								</div>
								<div class="caption">
									<p class="text-black">Clinic Management</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card card-new carousel-product">
								<div class="card-img my-5">
									<img src="img/features06.png" class="img-fluid w-75">
								</div>
								<div class="caption">
									<p class="text-black">Customer Support</p>
								</div>
							</div>
						</div>
					</div>
										
				</div>
				
				<a class="carousel-control-prev w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</a>
				
			</div>
		</div>

	</div>

	<br><br><br><br>

	<div class="custom-shape-divider-bottom-1635023936">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
		</svg>
	</div>

</section>

<section class="text-center"> <!-- Fifth section EMA -->
<br><br>
	
	<form>
		<h1>Answer our assessment on your mood</h1>
		<br><hr class="divider"><br>
		<p class="w-25 auto mb-5">
			This questionnaire will assess any previous/current feelings of anxiety and panic attacks experienced within 
			the past 6 months, please answer the questions with honesty.
		</p>

		<div class="container w-50">
			<div class="shadow-lg p-5 w-100 text-left">
					
				<div>
					<p id="message001"></p>
					<p id="options001"></p>
				</div>
				<div>
					<p id="message002"></p>
					<p id="options002"></p>
				</div>
				<div>
					<p id="message003"></p>
					<p id="options003"></p>
				</div>
				<div>
					<p id="message004"></p>
					<p id="options004"></p>
				</div>
				<div>
					<p id="message005"></p>
					<p id="options005"></p>
				</div>
				

				<p id="click001"></p>

				<br>

				<!-- MODAL RESULTS HERE-->
				<div class="modal fade" id="EMA-results" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog text-center">
						<div class="modal-content p-5">
							<h1 class="text-center">Result</h1>
							<br><hr class="divider"><br>
							<p id="comment001"></p>
							<p id="comment002"></p>
							<p id="measure01"></P>
							<p id="disclaimer001"></p>
						</div>
					</div>
				</div>	

			</div>
		</div>

	</form>

<br><br><br><br>	
</section>
    
<script>
let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
</script>
@endsection


