<?php $path = './'; require '../includes/header.php'; ?>

<!-- One -->
<section id="intro">
	<header class="major">
		<h2>Welcome!</h2>
	</header>
	<p>I am Diego Antognini, a research scientist at <a href="https://www.zurich.ibm.com/ics/">IBM Research AI</a>, working on machine learning and natural language processing. My research is centered around efficient machine learning for NLP. I am developing efficient alternatives to transformer-based language models, with model sizes on the order of one megabyte, suitable for resource-constrained embedded systems and data centers. My goal is to achieve similar predictive performance as large models while offering lower inference latencies for on-device NLP, which also improves user privacy. I am also interested in different pre-training strategies to achieve high-quality or lower-cost pre-training. Altogether, higher efficiency can be achieved both during training and inference. Additionally, I teach deep learning for natural language processing classes at the <a href="https://www.hslu.ch/en/">Lucerne Univesity of Applied Sciences (HSLU)</a>.<br /><br />
		I obtained my Ph.D. degree in Computer Science at <a href="http://www.epfl.ch">Swiss Federal Institute of Technology in Lausanne (EPFL)</a> in the <a href="http://lia.epfl.ch">Artificial Intelligence Laboratory (LIA)</a> under the supervision of <a href="http://lia.epfl.ch/~faltings/">Professor Boi Faltings</a>. My Ph.D. thesis is titled "<a href="https://infoscience.epfl.ch/record/292597">Textual Explanations and Critiques in Recommendation Systems</a>" and is available <a href="EPFL_TH9047.pdf">here</a>. During my PhD, I developed models to infer high-quality explanations from text documents in a scalable and data-driven manner through selective rationalization. Additionally, I designed new models to make explanations actionable (referred to as <i>critiquing</i>) and explored two important applications in natural language processing and conversational recommendation systems. I also worked on multi-objective optimization in recommendation systems and multi-document summarization.

		<br /><br />I have over 6 years of research experience in natural language processing (NLP), machine learning (ML), and single- and multi-objective recommendation systems.
I am experienced in developing efficient models for on-device inference (with a model size of approximately one megabyte and a latency of around one millisecond) and interpretable models that generate personalized and actionable textual explanations. I supervised over 60 B.Sc. and M.Sc. projects/theses and assessed more than 50 student projects.
I offer consulting services in natural language processing, recommender systems, and machine learning. You can have a quick overview of my background by downloading my <a href="cv_en.pdf">résumé</a>.

		<br /><br />Additionnally, I give talks (e.g., <a href="https://www.meetup.com/NLP-Zurich/">NLP Meetup in Zürich</a>, where I presented one of my past work <a href="https://www.youtube.com/watch?v=vKjMlNuX4GQ&feature=youtu.be">here</a>) and participate in challenges with students. We won a $10k prize at <a href="https://www.dni.gov/index.php/newsroom/press-releases/press-releases-2018/item/1838-iarpa-announces-the-geopolitical-forecasting-challenge-to-improve-crowdsourced-forecasts">IARPA 2018</a>).  <a href="https://actu.epfl.ch/news/phd-students-win-the-geopolitical-forecasting-chal/">EPFL News (English)</a> and <a href="https://avenue.argusdatainsights.ch/kundenartikel_archiv/2018-11/1086739/71681754.pdf">24 Heures (French)</a> wrote an article about it.

		<br /><br />I am in the job market. I am looking for exciting opportunities in research! If there is an opening in your organization for which I may be a suitable match, please do get in <a href="mailto:diegoantognini@gmail.com">touch</a>.
		
		<br /><br />
		On this website, I present some <a href="#publications">publications</a> and <a href="#patents">patents</a> I have been working on and some (prior to Ph.D.) of the most exciting <a href="#projects">projects</a>.
		If you have any questions, would like to see others projects (including OpenGL, realistic image synthesis, web frameworks), or if you are unable to find something, feel free to contact me <a href="mailto:diegoantognini@gmail.com">here</a>.
		<div style="text-align: center;">
			<ul class="actions">
				<li><a href="#publications" class="button">Publications</a></li>
				<li><a href="#patents" class="button">Patents</a></li>
				<li><a href="cv_en.pdf" class="button">Résumé</a></li>
				<li><a href="#projects" class="button">Projects (prior to Ph.D.)</a></li>
			</ul>
		</div>
	</section>

	<section id="news">
		<h2>News</h2>
		<div class="12u 12u$(small)">
				<div class="table-wrapper">
					<ul>
						<li><b style="font-weight: bold;">[June 2023]</b>: Keynote <i>Eﬃcient Machine Learning in Low-Resource and Highly-Speciﬁc Domains</i> at <a href="https://www.swisstext.org/">SwissText 2023</a> (hosts: Hatem Ghorbel and Mark Cieliebak).</li>
						<li><b style="font-weight: bold;">[May 2023]</b>: Paper <a href="#">pNLP-Mixer: an Efficient all-MLP Architecture for Language</a> accepted at <a href="https://2023.aclweb.org/">ACL 2023</a>.</li>
						<li><b style="font-weight: bold;">[May 2023]</b>: Paper <a href="#">Extracting Text Representations for Terms and Phrases in Technical Domains</a> accepted at <a href="https://2023.aclweb.org/">ACL 2023</a>.</li>
						<li><b style="font-weight: bold;">[Mar. 2023]</b>: One new patent filed with The United States Patent and Trademark Office (USPTO).</li>
						<li><b style="font-weight: bold;">[Mar. 2023]</b>: Invited talk <i>Eﬃcient Machine Learning in Low-Resource and Highly-Speciﬁc Domains</i> at <a href="https://mitibmwatsonailab.mit.edu/">MIT-IBM Watson AI Lab</a> (host: Leonid Karlinsky).</li>
						<li><b style="font-weight: bold;">[Feb. 2023]</b>: Two new patents filed with The United States Patent and Trademark Office (USPTO).</li>
						<li><b style="font-weight: bold;">[Jan. 2023]</b>: Paper <a href="https://aclanthology.org/2023.eacl-main.28.pdf">Assistive Recipe Editing through Critiquing</a> accepted at <a href="https://2023.eacl.org/">EACL 2023</a>.</li>
						<li><b style="font-weight: bold;">[Jan. 2023]</b>: One new patent filed with The United States Patent and Trademark Office (USPTO).</li>
						<li><b style="font-weight: bold;">[Sep. 2022]</b>: Paper <a href="https://arxiv.org/pdf/2210.13118.pdf">Unsupervised Term Extraction for Highly Technical Domains</a> accepted at <a href="https://2022.emnlp.org/">EMNLP 2022</a>.</li>
						<li><b style="font-weight: bold;">[Aug. 2022]</b>: Workshop paper <a href="https://arxiv.org/pdf/2210.10586.pdf">Active Learning for Imbalanced Civil Infrastructure Data</a> accepted at <a href="https://vap.aau.dk/cvcie/">CVCIE @ ECCV2022</a>.</li>
						<li><b style="font-weight: bold;">[May 2022]</b>: Joined <a href="https://www.zurich.ibm.com/ics/">IBM Research AI</a> as a Research Scientist in Zürich, Switzerland.</li> 
						<li><b style="font-weight: bold;">[Mar. 2022]</b>: Officially graduated from <a href="http://www.epfl.ch">Swiss Federal Institute of Technology in Lausanne (EPFL)</a>.</li>
						<li><b style="font-weight: bold;">[Feb. 2022]</b>: Defended my Ph.D. dissertation: <a href="https://infoscience.epfl.ch/record/292597">Textual Explanations and Critiques in Recommendation Systems</a>. My doctoral committee was composed of Prof. Boi Faltings, Prof. Julian McAuley, Prof. Scott Sanner, Prof. Antoine Bosselut, and Prof. Robert West.
					</ul>
				</div>
			</div>
	</section>

	<section id="publications">
		<h2>Publications</h2>
		<p>Here are some of my publications. You can also consult my <a href="https://scholar.google.com/citations?user=YvtRscgAAAAJ&hl=en">Google scholar profile</a>. Don't hesitate to contact me if you have any questions!</p>
		<div class="12u 12u$(small)">
				<div class="table-wrapper">
					<table>
						<tbody>
							<tr>
								<td>23) <b  style="font-weight: bold;">MC Layer Normalization for Calibrated Uncertainty in Deep Learning</b> 
									<br />Thomas Frick, <u>Diego Antognini</u>, Ioana Giurgiu, Benjamin Grewe, Cristiano Malossi, Rong Zhu, Mattia Rigotti<br />
									2023, CoRR
									<br /><br /><i>TL;DR: A drop-in replacement for Layer Normalization to endow neural networks with calibrated prediction uncertainty.</i>
								</td>
							</tr>
							<tr>
								<td>22) <b  style="font-weight: bold;">pNLP-Mixer: an Efficient all-MLP Architecture for Language</b> 
									<br />Francesco Fusco, Damian Pascual, Peter Staar, <u>Diego Antognini</u><br />
									2023, ACL
									<br /><br /><i>TL;DR: An embedding-free MLP-Mixer model for on-device NLP using a projection layer that relies on MinHash and counting bloom filters. Our model occupies merely one megabyte and achieves 99% of the performance of mBERT.</i>
								</td>
							</tr>
							<tr>
								<td>21) <b  style="font-weight: bold;">Extracting Text Representations for Terms and Phrases in Technical Domains</b>
									<br />Francesco Fusco*, <u>Diego Antognini*</u><br />
									2023, ACL
									<br /><br /><i>TL;DR: Meaningful word embeddings can be achieved using character-based models that are 5x smaller and 10x faster than BERT-based counterparts and do not suffer from out-of-distribution problems.</i>
								</td>
							</tr>
							<tr>
								<td>20) <b  style="font-weight: bold;">Assistive Recipe Editing through Critiquing</b> <a href="https://aclanthology.org/2023.eacl-main.28.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br /><u>Diego Antognini</u>, Shuyang Li, Boi Faltings, Julian McAuley<br />
									2023, EACL
									<br /><br /><i>TL;DR: A framework for generating recipes and enabling users to edit them using critiques in an iterative manner. The system coherently rewrites recipes to satisfy users’ feedback.</i>
								</td>
							</tr>
							<tr>
								<td>19) <b  style="font-weight: bold;">Unsupervised Term Extraction for Highly Technical Domains</b> <a href="https://arxiv.org/pdf/2210.13118.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Francesco Fusco, Peter Staar, <u>Diego Antognini</u><br />
									2022, EMNLP
									<br /><br /><i>TL;DR: A fully unsupervised method for term extraction that generalizes across domains. Our setup improves predictive performance and decreases inference latency on both CPUs and GPUs.</i>
								</td>
							</tr>
							<tr>
								<td>18) <b  style="font-weight: bold;">Active Learning for Imbalanced Civil Infrastructure Data</b> <a href="https://arxiv.org/pdf/2210.10586.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Thomas Frick, <u>Diego Antognini</u>, Mattia Rigotti, Ioana Giurgiu, Benjamin Grewe, Cristiano Malossi<br />
									2022, ECCV Workshop on Computer Vision for Civil and Infrastructure Engineering (CVCIE)
									<br /><br /><i>TL;DR: A method capable of operating on datasets suffering from heavy class imbalance, achieved by replacing the traditional active learning acquisition function with an auxiliary binary discriminator.</i>
								</td>
							</tr>
							<tr>
								<td>17) <b  style="font-weight: bold;">Textual Explanations and Critiques in Recommendation Systems</b> <a href="EPFL_TH9047.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a> or <a href="https://infoscience.epfl.ch/record/292597" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br /><u>Diego Antognini</u><br />
									2022, EPFL Ph.D. thesis
									<br /><br /><i>TL;DR: This dissertation focuses on two fundamental challenges. The first involves generating explanations: inferring high-quality explanations from text documents in a scalable and data-driven manner. The second challenge consists of making explanations actionable, which we refer to as critiquing. This dissertation examines two important applications in natural language processing and recommendation tasks.</i>
								</td>
							</tr>
							<tr>
								<td>16) <b  style="font-weight: bold;">Positive &amp; Negative Critiquing for VAE-based Recommenders</b> <a href="https://arxiv.org/pdf/2204.02162.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br /><u>Diego Antognini</u>, Boi Faltings<br />
									2022, CoRR
									<br /><br /><i>TL;DR: Fast negative and positive critiquing generalized for variational autoencoders, resulting in up to a 15% higher success rate compared to state-of-the-art models. The key lies in modeling positive and negative critiques as different modalities and employing a multi-modal VAE with weak supervision.</i>
								</td>
							</tr>
							<tr>
								<td>15) <b  style="font-weight: bold;">Interlock-Free Multi-Aspect Rationalization for Text Classification</b> <a href="https://arxiv.org/pdf/2205.06756.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Shuangqi Li, <u>Diego Antognini</u>, Boi Faltings<br />
									2022
									<br /><br /><i>TL;DR: Addressing the interlocking dynamics of multi-aspect rationalization, utilizing a novel self-supervised contrastive loss and multi-stage training to generate more semantically diverse rationales.</i>
								</td>
							</tr>
							<tr>
								<td>14) <b  style="font-weight: bold;">Interacting with Explanations through Critiquing (T-RECS)</b> <a href="https://arxiv.org/pdf/2005.11067.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a> <a href="https://lia.epfl.ch/critiquing/" class="icon fa-home"><span class="label">Paper</span></a> <a href="https://recorder-v3.slideslive.com/#/share?share=40743&s=ed95fb2c-99c7-40c7-980c-de7958b1784b" class="icon fa-file-video-o"><span class="label">Video</span> (Chrome only)</a>
									<br /><u>Diego Antognini</u>, Claudiu Musat, Boi Faltings<br />
									2021, IJCAI<!-- (acceptance rate: 13.9%)-->
									<br /><br /><i>TL;DR: How to extract explanations significantly preferred by humans over those produced by state-of-the-art models and how to make them actionable; enabling users to interact with them iteratively for improving the recommendation.</i>
								</td>
							</tr>
							<tr>
								<td>13) <b  style="font-weight: bold;">Fast Multi-Step Critiquing for VAE-based Recommender Systems (M&amp;Ms-VAE)</b> <a href="https://arxiv.org/pdf/2105.00774.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a> <a href="https://lia.epfl.ch/critiquing_moevae/" class="icon fa-home"><span class="label">Paper</span></a> <a href="recsys21_main_demo.mov" class="icon fa-file-video-o"><span class="label">Video</span></a>
									<br /><u>Diego Antognini</u>, Boi Faltings<br />
									2021, RecSys<!-- (acceptance rate: 18.4%)-->
									<br /><br /><i>TL;DR: Fast multi-step critiquing generalized for variational autoencoders, resulting in speeds up to 26x faster and a success rate 20% higher compared to state-of-the-art models. The key lies in modeling the problem using multi-modal VAE and weak supervision.</i>
								</td>
							</tr>
							<tr>
								<td>12) <b  style="font-weight: bold;">Multi-Step Critiquing User Interface for Recommender Systems</b> <a href="https://arxiv.org/pdf/2107.06416.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a> <a href="https://lia.epfl.ch/critiquing/" class="icon fa-home"><span class="label">Paper</span></a> <a href="recsys21_demo.mp4" class="icon fa-file-video-o"><span class="label">Video</span></a>
									<br />Diana, Petrescu*, <u>Diego Antognini*</u>, Boi Faltings<br />
									2021, RecSys Demo
									<br /><br /><i>TL;DR: We propose and demonstrate a new way of interacting with recommender systems to help users make decisions and find their ideal items.</i>
								</td>
							</tr>
							<tr>
								<td>11) <b  style="font-weight: bold;">Rationalization through Concepts (ConRAT)</b> <a href="https://arxiv.org/pdf/2105.04837.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a> <a href="acl2021.mp4" class="icon fa-file-video-o"><span class="label">Video</span></a>
									<br /><u>Diego Antognini</u>, Boi Faltings<br /> 
									2021, ACL Findings<!-- (acceptance rate: 21.3% (main) + 14.9% (findings))-->
									<br /><br /><i>TL;DR: Generalization of MTM: how to extract interpretable <u>multi</u>-faceted concepts (i.e., rationales) for <u>single-task</u> classification problems. It generate concepts that align with human rationalization, and outperforms state-of-the-art methods trained on each aspect label independently.</i>
								</td>
							</tr>
							<tr>
								<td>10) <b  style="font-weight: bold;">Multi-Dimensional Explanation of Target Variables from Documents (MTM)</b> <a href="Multi_Dimensional_Explanation_of_Target_Variables_from_Documents.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a> <a href="https://slideslive.com/38949254/multidimensional-explanation-of-target-variables-from-documents" class="icon fa-file-video-o"><span class="label">Video</span></a>
									<br /><u>Diego Antognini</u>, Claudiu Musat, Boi Faltings<br />
									2021, AAAI<!-- (acceptance rate: 21%)-->
									<br /><br /><i>TL;DR: One model to extract interpretable, meaningful, and coherent <u>multi</u>-faceted rationales for <u>multi-task</u> text classification problems, and perform better than individual rationalization models.</i>
								</td>
							</tr>
							<tr>
								<td>9) <b  style="font-weight: bold;">Addressing Fairness in Classification with a Model-Agnostic Multi-Objective Algorithm</b> <a href="https://arxiv.org/pdf/2009.04441.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a> <a href="uai2021_fairness.mp4" class="icon fa-file-video-o"><span class="label">Video</span></a>
									<br />Kirtan Padh, <u>Diego Antognini</u>, Emma L. Glaude, Boi Faltings, Claudiu Musat<br />
									2021, UAI<!-- (acceptance rate: 26.5%)-->
									<br /><br /><i>TL;DR: A model-agnostic multi-objective architecture that optimizes multiple fairness notions and sensitive attributes using a novel differentiable relaxation that approximates fairness notions through the hyperbolic tangent function.</i>
								</td>
							</tr>
							<tr>
								<td>8) <b  style="font-weight: bold;">Multi-Gradient Descent for Multi-Objective Recommender Systems</b> <a href="https://arxiv.org/pdf/2001.00846.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Nikola Milojkovic, <u>Diego Antognini</u>, Giancarlo Bergamin, Boi Faltings, Claudiu Musat<br />
									2020, AAAI Workshop on Interactive and Conversational Recommendation Systems (WICRS)
									<br /><br /><i>TL;DR: An efficient stochastic multi-gradient descent approach for multi-objective recommender systems.</i>
								</td>
							</tr>
							<tr>
								<td>7) <b  style="font-weight: bold;">HotelRec: a Novel Very Large-Scale Hotel Recommendation Dataset</b> <a href="https://www.aclweb.org/anthology/2020.lrec-1.605.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br /><u>Diego Antognini</u>, Boi Faltings<br />
									2020, LREC
									<br /><br /><i>TL;DR: A new dataset with 50 million hotel reviews with meta-attributes, user information, and multi-aspect ratings.</i>
								</td>
							</tr>
							<tr>
								<td>6) <b  style="font-weight: bold;">Recommending Burgers based on Pizza Preferences: Addressing Data Sparsity with a Product of Experts</b> <a href="https://arxiv.org/pdf/2104.12822.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Martin Milenkoski, <u>Diego Antognini</u>, Boi Faltings<br />
									2021, Recsys Workshop of Cross-Market Recommendation
									<br /><br /><i>TL;DR: We address data sparsity and generate recommendations in domains where there is limited knowledge about the user preferences.</i>
								</td>
							</tr>
							<tr>
								<td>5) <b  style="font-weight: bold;">Modeling Online Behavior in Recommender Systems: The Importance of Temporal Context</b> <a href="https://arxiv.org/pdf/2009.08978.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Milena Filipovic*, Blagoj Mitrevski*, <u>Diego Antognini</u>, Emma L. Glaude, Boi Faltings, Claudiu Musat<br />
									2021, RecSys Workshop on Perspectives on the Evaluation of Recommender Systems
									<br /><br /><i>TL;DR: Omitting temporal context while evaluating recommender systems leads to false confidence. We propose an evaluation protocol and a model-agnostic training procedure to incorporate temporal context.</i>
								</td>
							</tr>
							<tr>
								<td>4) <b  style="font-weight: bold;">Momentum-based Gradient Methods in Multi-objective Recommender Systems</b> <a href="https://arxiv.org/pdf/2009.04695.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Blagoj Mitrevski*, Milena Filipovic*, <u>Diego Antognini</u>, Emma L. Glaude, Boi Faltings, Claudiu Musat<br />
									2021, RecSys Workshop on Multi-Objective Recommender Systems
									<br /><br /><i>TL;DR: A coordinated multi-objective optimization method in which each objective is optimized using an algorithm similar to the Adam algorithm.</i>
								</td>
							</tr>
							<tr>
								<td>3) <b  style="font-weight: bold;">GameWikiSum: a Novel Large Multi-Document Summarization Dataset</b> <a href="https://www.aclweb.org/anthology/2020.lrec-1.820.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br /><u>Diego Antognini</u>, Boi Faltings<br />
									2020, LREC
									<br /><br /><i>TL;DR: A non-news domain-specific dataset for multi-document summarization that is 100 times larger than commonly used datasets.</i>
								</td>
							</tr>
							<tr>
								<td>2) <b  style="font-weight: bold;">Learning to Create Sentence Semantic Relation Graphs for Multi-Document Summarization</b> <a href="https://www.aclweb.org/anthology/D19-5404.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br /><u>Diego Antognini</u>, Boi Faltings<br/>
									2019, EMNLP Workshop on New Frontiers in Summarization
									<br /><br /><i>TL;DR: How to leverage universal and domain-sepcific sentence embeddings using a graph structure for multi-document summarization.</i>
								</td>
							</tr>
							<tr>
								<td>1) <b  style="font-weight: bold;">Dataset Construction via Attention for Aspect Term Extraction with Distant Supervision</b> <a href="https://arxiv.org/pdf/1709.09220.pdf" class="icon fa-file-pdf-o"><span class="label">Paper</span></a>
									<br />Athanasios Giannakopoulos*, <u>Diego Antognini*</u>, Claudiu Musat, Andreea Hossmann and Michael Baeriswyl<br />
									2017, ICDM Workshop on Sentiment Elicitation from Natural Text for Information Retrieval and Extraction (SENTIRE)
									<br /><br /><i>TL;DR: How to utilize large corpora for improved aspect term extraction using distant supervision.</i>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</section>

	<section id="patents">
		<h2>Patents</h2>
		<p>Here are some of my patents that have been filed. Don't hesitate to contact me if you have any questions!</p>
		<div class="12u 12u$(small)">
				<div class="table-wrapper">
					<table>
						<tbody>
							<tr>
								<td>1-4) <b  style="font-weight: bold;">To be announced eventually!</b> 
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</section>

	<!-- Two -->
	<section id="projects">
		<h2>Projects (prior to Ph.D.)</h2>
		<div class="row">
			<article class="6u 12u$(xsmall) work-item">
				<a href="projects/from_relation_extraction_to_knowledge_graphs" class="image fit thumb"><img src="projects/from_relation_extraction_to_knowledge_graphs/thumb.jpg" alt="" /></a>
				<h3>From Relation Extraction to Knowledge Graphs - M.Sc. thesis</h3>
				<p>My master thesis at <a href="http://www.iprova.com">Iprova</a>. A system for extracting concepts from large corpora and built interactive knowledge graphs to provide invention developers with new insights. <a href="projects/from_relation_extraction_to_knowledge_graphs"> View more</a></p>
			</article>
			<article class="6u$ 12u$(xsmall) work-item">
				<a href="projects/neobrain" class="image fit thumb"><img src="projects/neobrain/thumb.png" alt="" /></a>
				<h3>NeoBrain - B.Sc. thesis</h3>
				<p>A research project focused on optimizing neuronal activity maps treatment using massively parallel technologies.<a href="projects/neobrain"> View more</a></p>
			</article>
			<article class="6u 12u$(xsmall) work-item">
				<a href="projects/hurricane" class="image fit thumb"><img src="projects/hurricane/thumb.png" alt="" /></a>
				<h3>Hurricane</h3>
				<p>A scalable, decentralized system that aggregates secondary storage devices in a cluster with the aim of supporting parallel scans of data stored across them. <a href="projects/hurricane"> View more</a></p>
			</article>
			<article class="6u$ 12u$(xsmall) work-item">
				<a href="projects/dis" class="image fit thumb"><img src="projects/dis/thumb.png" alt="" /></a>
				<h3>Optimized flocking algorithm for e-pucks</h3>
				<p>I implemented, tested, analyzed and optimized a flocking algorithm for e-pucks. The objective was for the robots to avoid obstacles within the arena while maintaining their collective formation. Work in a multidisciplinary team. <a href="projects/dis"> View more </a></p>
			</article>
			<article class="6u 12u$(xsmall) work-item">
				<a href="projects/pokerface" class="image fit thumb"><img src="projects/pokerface/thumb.jpg" alt="" /></a>
				<h3>PokerFace</h3>
				<p>Realization of a complete Texas Hold'em Poker game with artificial intelligence. <a href="projects/pokerface"> View more</a></p>
			</article>
			<article class="6u$ 12u$(xsmall) work-item">
				<a href="projects/starfighter_4k" class="image fit thumb"><img src="projects/starfighter_4k/thumb.png" alt="" /></a>
				<h3>Starfighter 4K</h3>
				<p>Shoot 'em up game utilizing motion recognition with Kinect and Wiimotes for spaceship movement, inclination, and shooting. <a href="projects/starfighter_4k"> View more</a></p>
			</article>
			<article class="6u 12u$(xsmall) work-item">
				<a href="projects/cuda" class="image fit thumb"><img src="projects/cuda/thumb.jpg" alt="" /></a>
				<h3>CUDA</h3>
				<p>Several mini-projects are available for learning about GPGPU technologies, primarily CUDA. <a href="projects/cuda"> View more</a></p>
			</article>
			<article class="6u$ 12u$(xsmall) work-item">
				<a href="projects/image_classification" class="image fit thumb"><img src="projects/image_classification/thumb.png" alt="" /></a>
				<h3>Image classification</h3>
				<p>Classifier that recognizes the object present in an image using advanced models. The objects could be classified as a horse, airplane, car, or something else. <a href="projects/image_classification"> View more</a></p>
			</article>
			<article class="6u 12u$(xsmall) work-item">
				<a href="projects/social_recommendation_system" class="image fit thumb"><img src="projects/social_recommendation_system/thumb.jpg" alt="" /></a>
				<h3>Social Recommendation System</h3>
				<p>Recommender systems for events based on user data and Facebook profile. <a href="projects/social_recommendation_system"> View more</a></p>
			</article>
			<article class="6u$ 12u$(xsmall) work-item">
				<a href="projects/facial_recognition" class="image fit thumb"><img src="projects/facial_recognition/thumb.jpg" alt="" /></a>
				<h3>Facial recognition among profiles</h3>
				<p>Detect whether a person is wearing sunglasses using a collection of profile pictures of different individuals. Each person has pictures taken from different head angles, displaying different emotions, and with or without sunglasses. <a href="projects/facial_recognition"> View more</a></p>
			</article>
			<article class="6u 12u$(xsmall) work-item">
				<a href="projects/pcml-p1" class="image fit thumb"><img src="projects/pcml-p1/thumb.png" alt="" /></a>
				<h3>Pattern classification and machine learning project 1</h3>
				<p>Project on regression and classification using linear models. One dataset is provided for each task without any accompanying information. <a href="projects/pcml-p1"> View more</a></p>
			</article>
			<article class="6u$ 12u$(xsmall) work-item">
				<a href="projects/recommender_system/paper.pdf" class="image fit thumb"><img src="projects/recommender_system/thumb.jpg" alt="" /></a>
				<h3>Recommender System challenge</h3>
				<p>Third task of the challenge of European Semantic Web Conference on a Top-N recommendation of books (ESWC-14 Challenge). <a href="https://github.com/Diego999/RecSys-ESWC2014" class="icon fa-github"><span class="label">Github</span></a> <a href="projects/recommender_system/paper.pdf" class="icon fa-file-pdf-o"><span class="label">Report</span></a></p>
			</article>
			<article class="6u 12u$(xsmall) work-item">
				<a href="projects/imdb" class="image fit thumb"><img src="projects/imdb/thumb.png" alt="" /></a>
				<h3>EPFL-IMDB</h3>
				<p>A movie directory with heavy database background using real data from IMDb. <a href="projects/imdb"> View more</a></p>
			</article>
			<article class="6u$ 12u$(xsmall) work-item">
				<a href="projects/star2" class="image fit thumb"><img src="projects/star2/thumb.png" alt="" /></a>
				<h3>Star<sup>2</sup></h3>
				<p>Planetarium software displays the current view of the sky at the present location. <a href="projects/star2"> View more</a></p>
			</article>
		</div>
	</section>

	<?php require('../includes/footer.php'); ?>?>