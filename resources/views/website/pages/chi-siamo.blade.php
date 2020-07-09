@extends('website.layouts.master')


@section('content')
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Chi Siamo</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Chi Siamo</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_content">
						<h3>IL NOSTRO UFFICIO</h3>
						<p class="color-black22 mt20">La sua dinamicità ed organizzazione rende M.S.G. s.r.l. leader nel settore della pubblicità OUTDOOR/INDOOR, con una vasta gamma di impiantistica pubblicitaria di ogni dimensione e forma. Ad oggi, grazie a Partnership e accordi consolidati con Media Nazionali, la M.S.G. s.r.l. è in grado di seguire i suoi clienti a 360° in tutta Italia.
                            </p>
						<p class="mt15"> Desideriamo unicamente affiancare e sostenere i nostri clienti nel conseguimento dei loro obiettivi di marketing e di vendita, senza dimenticare mai di garantire il giusto rapporto qualità/prezzo.
                          </p>
						<p class="mt20">  Attraverso un processo aziendale ben strutturato, assicuriamo la corretta e puntuale affissione della vostra campagna pubblicitaria, rispettando le date di esposizione stabilite e certificando tutto il processo lavorativo svolto, prima con l'invio della "nota posizione" che comunica l'avvenuta installazione e subito dopo con il report fotografico grazie al quale potete visualizzare tutti gli impianti noleggiati.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_thumb">
						<img class="img-fluid" src="{{asset('website/images/about/960x820_1.jpg')}}" alt="8.jpg">
					</div>
				</div>
			</div>
			<div class="row mb60">
				<div class="col-lg-12 text-center mt60">
					<h3 class="fz26">Our Story</h3>
				</div>
				<div class="col-lg-12 text-center mt40">
					<ul class="funfact_two_details">
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>FOREIGN FOLLOWERS</h5>
									<div class="timer">88,000</div>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>CERTIFIED TEACHERS</h5>
									<div class="timer">96</div>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>STUDENTS ENROLLED</h5>
									<div class="timer">4,789</div>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>COMPLETE COURSES</h5>
									<div class="timer">489</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4>Who We Are</h4>
						<p class="mt25">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis,et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<p class="mt25">Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.,Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4>What We Do</h4>
						<p class="mt25">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis,et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<p class="mt25">Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.,Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@push('script')

@endpush
