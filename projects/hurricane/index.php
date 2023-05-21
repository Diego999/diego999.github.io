<?php $path = '../../'; require '../../../includes/header.php'; ?>

<!-- Four -->
<section id="project">
	<div class="box alt">
		<div class="row 50% uniform">
			<div class="12u$"><span class="image fit"><img src="thumb.png" alt="" /></span></div>
		</div>
	</div>
	<header>
		<h2>Hurricane <a href="https://github.com/Diego999/Hurricane" class="icon fa-github"><span class="label">Github</span></a> <a href="presentation.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a></h2>
		<p style="text-align: justify;">A scalable, decentralized system that aggregates secondary storage devices in a cluster with the aim of supporting parallel scans of data stored across them, based on : <a href="http://dl.acm.org/citation.cfm?doid=2815400.2815408">Chaos</a>.<br /><b>C++, ZeroMQ, Thrift</b></p>
	</header>

	<p style="text-align: justify;">Many big data applications process large volumes of data using a pipeline of operators, some of which do not require any ordering of data records. Hurricane is a scalable, decentralized system that aggregates secondary storage devices in a cluster with the aim of supporting parallel scans of data stored across them. Hurricane spreads input and output data uniformly at random and leverages the absence of order between data blocks to balance load seamlessly and mitigate the effects of stragglers. We implemented a prototype of Hurricane with an HDFS-like RPC interface to facilitate interoperability and demonstrate that the resulting system is scalable and achieves I/O balance seamlessly at near-maximal bandwidth."</p>
	<hr />

	<section>
		<h3>The Project</h3>
		<span class="image left"><img src="pipelining_order_oblivious_operators.png" alt="" /></span>
		<h4>Pipeling of order-oblivious operators</h4>
		<p style="text-align: justify;">Order-oblivious operators possess the property that the outcome of their execution on a list of records remains unaffected by the ordering of records within that list: any permutation yields a correct answer. These operators are very interesting  in a cluster since they do not require any centralized control. For instance, one can leverage these operators to distribute the I/O load evenly among the available disks.</p>

		<span class="image right"><img src="bandwidth.png" alt="" /></span>
		<h4 style="text-align=right">Balance I/O loads randomly across available disks and saturate available storage bandwidth</h4>
		<p style="text-align: justify;">This is possible because Hurricane leverages the absence of order between data blocks (order-oblivious operators). We rely on the assumption that remote storage bandwidth is equal to local storage bandwidth, as storage is slower than the network bandwidth. Therefore, the network is not a bottleneck. This can be accomplished by carefully matching network interfaces to storage interfaces. This configuration is realistic for most clusters at the rack scale or even larger. <a href="https://www.usenix.org/system/files/conference/osdi12/osdi12-final-75.pdf">[1]</a> <a href="http://research.microsoft.com/en-us/um/people/srikanth/data/vl2_sigcomm09.pdf">[2].</a></p>

		<span class="image left"><img src="interoperability.png" alt="" /></span>
		<h4>Interoperability</h4>
		<p style="text-align: justify;">Although the server side of Hurricane is written in C++, we provide an HDFS-like RPC interface using <a href="https://thrift.apache.org">Thrift</a>. This allows users to access Hurricane with a wide range of programming languages. Furthermore, if we decide to change the server side code to another language, it would still function properly.</p>
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
								<td>Master semester project</td>
							</tr>
							<tr>
								<td><b>Degree</b></td>
								<td>M.Sc. <a href="http://www.epfl.ch">EPFL</a>, 2<sup>nd</sup> semester</td>
							</tr>
							<tr>
								<td><b>Laboratory</b></td>
								<td><a href="http://labos.epfl.ch">Operating Systems Laboratory</a></td>
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
								<td><b>Supervisor Prof.</b></td>
								<td><a href="https://au.linkedin.com/in/willy-zwaenepoel-31a27323">Prof. Willy Zwaenepoel</a></td>
							</tr>
							<tr>
								<td><b>Supervisor PhD</b></td>
								<td><a href="https://ch.linkedin.com/in/bindschaedler">Laurent Bindschaedler</a></td>
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