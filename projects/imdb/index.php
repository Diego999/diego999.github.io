<?php $path = '../../'; require '../../../includes/header.php'; ?>

<!-- Four -->
<section id="project">
	<div class="box alt">
		<div class="row 50% uniform">
			<div class="12u$"><span class="image fit"><img src="thumb.png" alt="" /></span></div>
		</div>
	</div>
	<header>
		<h2>EPFL IMDb <a href="https://github.com/Diego999/IntroductionToDatabaseSystem" class="icon fa-github"> <span class="label">Github</span></a><a href="report.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a></h2>
		<p style="text-align: justify;">A movie directory with heavy database background using real data from IMDb.<br /><b>MySQL, PHP</b></p>
	</header>

	<p style="text-align: justify;">Being the main topic of the "Introduction to database systems" course at EPFL, this application aims at dealing with large amounts of data and making them accessible through common user interfaces. Tens of millions of database records had to be gathered, imported, formatted and then accessed and modified through a web application developed in PHP. The whole application had to satisfy strict timing constraints about queries and loading times.</p>
	<hr />

	<section>
		<h3>The Project</h3>
		<span class="image left"><img src="mcd.png" alt="" /></span>
		<h4>Conceptual modelling and normalization constraints</h4>
		<p style="text-align: justify;">Developed in parallel with the lectures that taught us the good practices in the field, the conceptual model for the database had to adhere to numerous constraints and was reviewed by PhD teaching assistants who advised us on potential improvements. Although it was overly normalized, our model was very easy to user and programmable.</p>

		<span class="image right"><img src="query.png" alt="" /></span>
		<h4 style="text-align=right">Advanced SQL queries</h4>
		<p style="text-align: justify;">A request was made to design a list of SQL queries. Most of these queries were very specific, such as: 'For each country, list the most frequent character name that appears in the productions of a production company (not a distributor) from that country.' To ensure processing within an acceptable response time, it was necessary to carefully choose various indexes, the order of joins, and so on.</p>

		<span class="image left"><img src="optimization.png" alt="" /></span>
		<h4>Query execution plan understanding and performance optimization</h4>
		<p style="text-align: justify;">The ultimate goal of the course and project was to learn how to optimize queries and achieve a system that is as efficient as possible. Research was conducted on query execution plans provided by MySQL, and optimizations were profiled and applied to various components of the program and underlying queries in order to obtain response times of less than 1 second. This was achieved on a locally stored database with over 60 million tuples running on a laptop.</p>
		<hr />
	</section>

	<section>
		<h3>Miscellaneous</h3>
		<div class="row">
			<div class="6u 12u$(small)">
				<div class="table-wrapper">
					<table>
						<tbody>
							<tr>
								<td><b>Type</b></td>
								<td>Course project</td>
							</tr>
							<tr>
								<td><b>Degree</b></td>
								<td>HES Pathway <a href="http://www.epfl.ch">EPFL</a>, 2<sup>nd</sup> semester</td>
							</tr>
							<tr>
								<td><b>Course</b></td>
								<td>Introduction to database systems</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="6u 12u$(small)">
				<div class="table-wrapper">
					<table>
						<tbody>
							<tr>
								<td><b>Duration</b></td>
								<td>~90 hours</td>
							</tr>
							<tr>
								<td><b>Supervisor</b></td>
								<td><a href="https://www.linkedin.com/in/mattolma">Matthaios Alexandros Olma</a></td>
							</tr>
							<tr>
								<td><b>Co-developers</b></td>
								<td><a href="https://ch.linkedin.com/in/jason-racine-0888a545/en">Jason Racine</a>, <a href="https://ch.linkedin.com/in/alex-veuthey">Alexandre Veuthey</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

	<div style="text-align: center;">
		<ul class="actions">
			<li><a href="../../index.php#projects" class="button">Go back to projects</a></li>
		</ul>
	</div>
</section>
<?php require '../../../includes/footer.php'; ?>