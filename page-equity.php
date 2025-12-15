<?php
/**
 * Template for Equity page
 *
 * @package Golden_Eye_Security
 */

get_header();
?>

<main id="main" class="site-main">
	<div class="container">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'equity-page' ); ?>>
				<header class="equity-header">
					<h1 class="equity-title">EQUITY</h1>
					<p class="equity-intro">Golden Eye is a black owned business entity with a proactive black economic empowerment strategy aligned with the BEE scorecard.</p>
				</header>

				<!-- Ownership Breakdown -->
				<div class="ownership-breakdown">
					<div class="ownership-item ownership-majority">
						<div class="ownership-percentage">51%</div>
					</div>
					<div class="ownership-item ownership-co1">
						<div class="ownership-percentage">25%</div>
					</div>
					<div class="ownership-item ownership-co2">
						<div class="ownership-percentage">24%</div>
					</div>
				</div>

				<div class="equity-content">
					<div class="equity-description">
						<p>Golden Eye is a black owned business entity and has a pro-active black economic empowerment strategy with objectives set, in line with the BEE scorecard as published in the Government Gazette. CK2 Certificate available on request, as issued.</p>
						<p>Golden Eye is an equal opportunity employer with a very active equity policy. We aim to be representative of our clients regarding race, language and sex. Recruitment is professionally conducted and also complies with the Labour Relations Act 66 of 1995 and the Employment Equity Act. Our company's remuneration policy complies with the Basic Conditions Employment Act, as enshrined in the Government Gazette.</p>
					</div>

					<!-- Group Members Section -->
					<section class="group-members-section">
						<h2 class="section-title">Group Members</h2>
						<p class="section-subtitle">Meet the dedicated leadership team driving Golden Eye Security's success and transformation</p>

						<div class="members-grid">
							<!-- Member 1: Michael Tibakanye -->
							<article class="member-card">
								<div class="member-header">
									<div class="member-initials">MT</div>
									<div class="member-info">
										<h3 class="member-name">Michael Tibakanye</h3>
										<div class="member-ownership">
											<span class="ownership-badge">51% Ownership</span>
											<span class="member-role">Majority Owner</span>
										</div>
									</div>
								</div>
								<div class="member-bio">
									<p>Michael was born on 15 October 1955 in Carletonville. Attended and completed his High School education at Batshold High School at Itseoeng, Lichtenburg in 1975.</p>
									<p>He obtained his National Diploma in Personnel Management, National Diploma in Training Management and Professional Certificate in Human Resources at the Institute of Personnel Management. He also completed his Bachelor of Technology in Human Resources Management at the Technikon South Africa in 1999.</p>
									<p>After 17 years at Lafarge Cement in the Personnel and Training department, Michael decided to join the private sector. During November 2003 he purchased the shares.</p>
								</div>
							</article>

							<!-- Member 2: Folkers Hammann -->
							<article class="member-card">
								<div class="member-header">
									<div class="member-initials">FH</div>
									<div class="member-info">
										<h3 class="member-name">Folkers Hammann</h3>
										<div class="member-ownership">
											<span class="ownership-badge">25% Ownership</span>
											<span class="member-role">Co-Owner</span>
										</div>
									</div>
								</div>
								<div class="member-bio">
									<p>Folkers completed his teaching studies December 1987 at POK/PU. He joined the SANDF from 1988 – 1998, where he achieved the rank of LT. In 1989 he received the award for being the Best Company Commander for the year 1989 (far North Command).</p>
									<p>Folkers served in the teaching profession from 1990 – 1992, after which he joined then the called Blue Circle Cement in Lichtenburg as Personnel/Security Officer until December 1998. During this period he was responsible for managing the total security function, which included complying with the ISO SYSTEM for listing purpose.</p>
									<p>Folkers is a professionally qualified and registered Security advisor and achieved his National Diploma in Security Management from UNISA.</p>
								</div>
							</article>

							<!-- Member 3: Eileen Hammann -->
							<article class="member-card">
								<div class="member-header">
									<div class="member-initials">EH</div>
									<div class="member-info">
										<h3 class="member-name">Eileen Hammann</h3>
										<div class="member-ownership">
											<span class="ownership-badge">24% Ownership</span>
											<span class="member-role">Co-Owner</span>
										</div>
									</div>
								</div>
								<div class="member-bio">
									<p>Matriculated at Potchefstroom Gimnasium 1988. During the period 1989 – 1991 Eileen studied and attained her BSC degree at PU for CHE. At the end of 1992 she obtained her post degree diploma at the University of Pretoria.</p>
									<p>For the period 1993 – 1998 Eileen was self-employed in the Medical field, after which she joined Golden Eye, managing the finance department.</p>
									<p>Eileen also received the Grade B certificate for security officers. She has fifteen years experience in daily security operational matters as well as the financial aspects of a security company.</p>
								</div>
							</article>
						</div>
					</section>
				</div>
			</article>
			<?php
		}
		?>
	</div>
</main>

<?php
get_footer();

