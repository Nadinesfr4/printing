@extends('client.layout')
@section('content')

<main>
	<section class="blog_section sec_ptb_130 clearfix">
		<div class="container">
			<div class="row mt__30 mb_80 justify-content-center">
				@foreach ($data as $item)
				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp2" data-wow-delay=".3s">
					<div class="blog_grid_2">
						<a class="item_image" target="_blank" href="blog_details">
							@if($item->gambar)
								<img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar">
							@else
								Tidak ada gambar
							@endif
						</a>
						<div class="item_content">
							<a class="post_category bg_default_orange" href="#!">{{ $item->penulis }}</a>
							<h3 class="item_title">
								<a target="_blank" href="blog_details">{{ $item->judul }}</a>
							</h3>
						</div>
						<ul class="post_meta ul_li clearfix">
							<li><a href="#!"><i class="far fa-comments"></i> Comments (05)</a></li>
							<li><a href="#!"><i class="far fa-heart"></i> View (1k)</a></li>
						</ul>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div>
			{{ $data->links() }}
		</div>
	</section>
</main>

@endsection