<?php $path = '../../'; require '../../../includes/header.php'; ?>

<!-- Four -->
<section id="project">
	<div class="box alt">
		<div class="row 50% uniform">
			<div class="12u$"><span class="image fit"><img src="thumb.png" alt="" /></span></div>
		</div>
	</div>
	<header>
		<h2>NeoBrain</h2>
		<p style="text-align: justify;">B.Sc. thesis, A research project focused on optimizing neuronal activity maps treatment using massively parallel technologies.<br /><b>C++, CUDA, Boost</b></p>
	</header>

	<p style="text-align: justify;">In the scope of the NeoBrain project, several algorithms have been designed to solve large-scale problems involving 60,000x10,000 matrices over thousands of iterations in the field of neuronal activity visualization. NeoBrain aims to utilize MRI and MEG scans in a joint manner to generate 3D brain models with real-time neuronal activity animation on the cerebral cortex. The algorithm for retrieving the neuronal map from MEG sensors takes three weeks to execute on a standard PC. The objective of this project was to achieve the maximum speedup possible by leveraging CUDA technology with a limited number of GPUs.</p>
	<hr />

	<section>
		<h3>The Project</h3>
		<span class="image left"><img src="algorithms.png" alt="" /></span>
		<h4>Large matrices with non-obvious metrics and parallelization</h4>
		<p style="text-align: justify;">An important mathematical background has been incorporated into simplified (confidential) algorithms used in NeoBrain. Having a basic understanding of these mathematics is necessary to comprehend how the algorithm can be optimized and which part of the matrices it relies on. Additionally, finding an efficient method to parallelize all the computations was challenging due to the need to utilize advanced CUDA features.</p>

		<span class="image right"><img src="brain.png" alt="" /></span>
		<h4 style="text-align=right">Using estimation methods to build up neural activity maps</h4>
		<p style="text-align: justify;">As the base equation system (with 10<sup>8</sup> variables) is inherently unsolvable, the only way to obtain usable neuronal activity maps from the MEG sensors is through an iterative process with an error estimator. This algorithm has been implemented in multiple ways, leveraging different CUDA capabilities, to find the most efficient solution. Starting from the sequential version, approximately 30 implementations have been developed, resulting in a final speedup of over 100,000.</p>

		<span class="image left"><img src="parameters.png" alt="" /></span>
		<h4>Tuning parameters</h4>
		<p style="text-align: justify;">To ensure that the fastest algorithm implementation actually produces the correct result, certain parameters had to be tuned. Extensive tests were conducted using common machine learning methods to discover the minimum cost estimators, resulting in optimized settings that generate the most accurate neuronal activity map. Several cost estimators and minimization methods were employed, such as random search and stochastic gradient descent.</p>
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
								<td>B.Sc. thesis</td>
							</tr>
							<tr>
								<td><b>Degree</b></td>
								<td>B.Sc. <a href="http://www.he-arc.ch">HE-Arc</a>, 3<sup>rd</sup> year</td>
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
								<td>~400 hours</td>
							</tr>
							<tr>
								<td><b>Supervisor</b></td>
								<td><a href="http://people.he-arc.ch/contact.php?id=2831857">Prof. Cédric Bilat</a></td>
							</tr>
							<tr>
								<td><b>Co-developer</b></td>
								<td><a href="https://ch.linkedin.com/in/jason-racine-0888a545/en">Jason Racine</a></td>
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