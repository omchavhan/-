<?php include ('header.php'); ?>

<style>

.aboutMainSec .pad p {
    min-height:132px;
}

.btn-primary {
    min-width: 145px;
}
    
</style>

<section class="PodcastMainSec mainSection">
    <!-- BANNER -->
	<div class="section banner-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">PODCAST</div>
					<div class="breadcrumb-container">
						<ol class="breadcrumb">
							<li><a href="index.php">Index</a></li>
							<li class="active">Podcast</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="section why section-border">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-md-5">
					<img loading="lazy" src="img/podcastImg.jpg" alt="" style="display:block; margin-bottom:1rem; width:100%">
                    <div class="margin-bottom-30"></div>
				</div>
				<div class="col-sm-12 col-md-7">
					<h3>Welcome to FINTALK</h3>
					<p>Hello & Welcome to FINTALK - the financial freedom podcast. I am your host Samir Machawe. I am a financially free and take one vacation per month. I help people achieve financial freedom in their lives and currently I manage more than 100 crores of financial assets for my clients. This podcast is designed to help you improve your financial management and move towards financial freedom. My mission is to create an access for people to live an abundant life and the life that they love. By taking control of your finances, you can make sure that your money is working for you, not against you. Thank you for tuning in to the Financial Freedom Podcast, and I look forward to discussing more topics that can help you achieve your financial goals and eventually become financially free.</p>
                    
                    <ul>
                        <li><a target="_blank" href="https://open.spotify.com/show/6NdZGIqNIAgFB9LFvAbi1n" class="btn btn-primary">Spotify</a></li>
                        <li><a target="_blank" href="https://redcircle.com/shows/99cc1b0b-04a6-4dde-b30f-873f6ca557cc" class="btn btn-primary">Redcircle</a></li>
                        <li><a target="_blank" href="https://radiopublic.com/fintalk-WwoPw0" class="btn btn-primary">Radiopublic</a></li>
                        <li><a target="_blank" href="https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5yZWRjaXJjbGUuY29tLzk5Y2MxYjBiLTA0YTYtNGRkZS1iMzBmLTg3M2Y2Y2E1NTdjYw/episode/N2Q0NzEwZDUtNzliZS00NDIxLTg2NDItNTg3ZjExMDJmNmEz?sa=X&ved=0CAgQuIEEahcKEwiwt7i1qav_AhUAAAAAHQAAAAAQLA" class="btn btn-primary">Google Podcast</a></li>
                    </ul>
                    

				</div>
				
			</div>
		</div>
	</div>
	
</section>

<!-- read more script -->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
        // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
        $('.read-more-content').addClass('hide')
        $('.read-more-show, .read-more-hide').removeClass('hide')

        // Set up the toggle effect:
        $('.read-more-show').on('click', function(e) {
        $(this).next('.read-more-content').removeClass('hide');
        $(this).addClass('hide');
        e.preventDefault();
        });

        $('.read-more-hide').on('click', function(e) {
        $(this).parent('.read-more-content').addClass('hide');
        var moreid=$(this).attr("more-id");
        $('.read-more-show#'+moreid).removeClass('hide');
        e.preventDefault();
        });
    </script>

<!-- read more script end -->

<!-- counter-count script start -->

<script>
    $('.counter-number').each(function () {
        $(this).prop('counter',0).animate({
            counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>

<!-- counter-count script end -->

<?php include ('footer.php'); ?>