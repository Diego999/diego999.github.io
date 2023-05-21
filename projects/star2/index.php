<?php $path = '../../'; require '../../../includes/header.php'; ?>

<!-- Four -->
<section id="project">
	<div class="box alt">
		<div class="row 50% uniform">
			<div class="12u$"><span class="image fit"><img src="thumb.png" alt="" /></span></div>
		</div>
	</div>
	<header>
		<h2>Star<sup>2</sup> <a href="https://github.com/projetp1/Frontend" class="icon fa-github"> <span class="label">Github Project</span></a> <a href="https://github.com/projetp1/P1-Android-BT-Simulator" class="icon fa-github"> <span class="label">Github Simulator</span></a></h2>
		<p style="text-align: justify;">Planetarium software displays the current view of the sky at the present location.<br /><b>Java</b></p>
	</header>

	<p style="text-align: justify;">This project is about a star pointer that enables you to observe the sky, including the stars and constellations. The star pointer consists of an embedded PIC board, which is connected to a computer via RS-232. Subsequently, we developed a simulator for the Android operating system. The computer receives orientation information from either the PIC board or the simulator. With this data, we can compute the celestial map and display it, allowing you to view the stars, constellations, the moon (with its various phases), and the sun. By clicking on their respective images, you can access further information about stars or constellations. Additionally, we have incorporated a search engine to facilitate the location of specific stars and constellations.</p>
	<hr />

	<section>
		<h3>The Project</h3>
		<span class="image left"><img src="sky.png" alt="" /></span>
		<h4>Sky visualisation</h4>
		<p style="text-align: justify;">The sky is actually a complete sphere, from which we can only see a small part at any given time. To represent that sphere on a flat computer screen, it is necessary to project coordinates from spherical representation to planar representation. Many techniques exist in order to accomplish this. We used a standard planar projection. Spherical coordinates are simply taken as polar coordinates on a mathematical XY plane, which is then displayed with a zoom factor on the rectangular screen. Movements consist of rotating around the central point, moving up or down, and zooming in to see more stars.</p>

		<span class="image right"><img src="query.png" alt="" /></span>
		<span class="image left"><img src="settings.png" alt="" /></span>
		<h4 style="text-align=right">Configure settings to access PIC controller settings and use queries for accessing large database</h4>
		<p style="text-align: justify;">To communicate with the PIC controller, a varying number of parameters needs to be specified. In order to achieve flexibility and utilize different types of "star pointers," you can select values for different settings. Star<sup>2</sup> contains over 120,000 stars visible with a telescope from the Earth's surface. To facilitate the selection of stars the user wants to display, they can use queries to filter the desired stars.</p>

		<span class="image left"><img src="maths.jpg" alt="" /></span>
		<span class="image right"><img src="pointer.jpg" alt="" /></span>
		<h4>Mathematic operations</h4>
		<p style="text-align: justify;">Mathematics is present in almost every part of the project. The projection of the sky from a sphere to a plane uses mathematics. The computation of star coordinates from generic static ones to current sky-specific ones uses mathematics. Gathering altitude and azimuth angles from X, Y, and Z vectors coming from hardware accelerometers embedded on a star pointer uses mathematics. Computing universal time based on local time and the abstract epoch notion uses mathematics. We developed all the needed formulas during the development process. With all of this, you can compute the necessary information if you want to point a specific star.</p>
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
								<td>B.Sc. HE-Arc <a href="http://www.he-arc.ch">HE-Arc</a>, 1<sup>st</sup> year</td>
							</tr>
							<tr>
								<td><b>Course</b></td>
								<td>-</td>
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
								<td>~240 hours</td>
							</tr>
							<tr>
								<td><b>Supervisor</b></td>
								<td><a href="https://ch.linkedin.com/in/fran%C3%A7ois-ti%C3%A8che-7b18674">Prof. François Tièche</a></td>
							</tr>
							<tr>
								<td><b>Co-developers</b></td>
								<td><a href="https://www.linkedin.com/in/alexandre-perez-38962244">Alexandre Perez</a>, <a href="https://www.linkedin.com/in/sebvaucher/en">Sébastien Vauchez</a>, <a href="https://ch.linkedin.com/in/issa-barbier-31941b102">Issa Barbier</a>, <a href="https://ch.linkedin.com/in/loris-ceschin">Loris Ceschin</a></td>
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