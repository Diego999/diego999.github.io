<?php $path = '../../'; require '../../../includes/header.php'; ?>

<!-- Four -->
<section id="project">
	<div class="box alt">
		<div class="row 50% uniform">
			<div class="12u$"><span class="image fit"><img src="thumb.png" alt="" /></span></div>
		</div>
	</div>
	<header>
		<h2>Pattern classification and machine learning project 1 <a href="https://github.com/Diego999/Pattern-Classification-And-Machine-Learning/tree/master/Projet%20I" class="icon fa-github"> <span class="label">Github</span></a><a href="paper.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a></h2>
		<p style="text-align: justify;">Project about regression and classification using linear models. One dataset per task is given without any information.<br /><b>Matlab</b></p>
	</header>

	<p style="text-align: justify;">In this project we received two datasets without any information, one for a regression task and another for a classification task. The main goal was to apply basic machine learning techniques such as exploratory data analysis, feature engineering, k-fold cross validation etc. and use some linear models in order to be prepared for the <a href="../image_classification">second project</a>. </p>
	<hr />

	<section>
		<h3>The Project</h3>
		<span class="image left"><img src="exploratory.jpg" alt="" /></span>
		<h4>Exploratory data analysis & feature processing</h4>
		<p style="text-align: justify;">Learning about the characteristics of the data is very important, we might see correlations among features, if the data are visually linearly separable, we can identify outliers and remove them for the training, estimate the data distribution etc. Moreover, we may start thinking about what transformation could we do in order express better our data.</p>

		<span class="image right"><img src="tuning.png" alt="" /></span>
		<h4 style="text-align=right">Tuning parameters</h4>
		<p style="text-align: justify;">In order to have the best root mean square error (RMSE) or a 0-1 loss for a given model, we have to use a validation set which will allow us to find the parameters which give the lowest error for our model. For example, a ridge regression with a polynomial basis has two parameters : the regularization parameter and the degree of the polynomial basis. We especially need to be careful about underfitting and overfitting. </p>

		<span class="image left"><img src="models.png" alt="" /></span>
		<h4>Model selection</h4>
		<p style="text-align: justify;">All the models used in this project were linear with eventually a non-linear transformation of the data. In order to find the best model among all our tuned models, we need a test set to approximate the unbiased generalized error. One possible way to do that is to use k-fold cross validation, e.g. 60% of the data for the training, 20% for the validation and 20% for the testing.</p>
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
								<td>M.Sc. <a href="http://www.epfl.ch">EPFL</a>, 1<sup>st</sup> semester</td>
							</tr>
							<tr>
								<td><b>Course</b></td>
								<td>Pattern classification and machine learning</td>
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
								<td>~50 hours</td>
							</tr>
							<tr>
								<td><b>Supervisor</b></td>
								<td><a href="https://ch.linkedin.com/in/mohammad-emtiyaz-khan-932139b3">Prof. Mohammad Emtiyaz Khan</a></td>
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