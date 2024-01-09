<?php  

function get_profile($slug)
{
	if($slug === 'dr-habib')
	{
		$data['name'] = 'Dr. Habib Pathan Khan';
		$data['content'] = '
			<p class="section-desc mb-15">MBBS, MD (Pediatrics), FIPN</p>
		    <p class="section-desc mb-15">Fellowship In Pediatric Neurology (TRIVANDRUM)</p>
		    <p class="section-desc mb-15">Senior Consultant Pediatric Neurologist </p>
		    <p class="section-desc mb-15">Founder/Director Dr Habib’s Foster CDC (Child Development Centre) Child Neuro Care, Hyderabad, India.</p>
		    <p class="section-desc mb-15">Dr. Habib Khan Pathan is an elite Pediatric Neurologist and Epileptologist with experience in managing difficult cases with his systematic approach, apt diagnosis, and simplified counseling. </p>
		    <p class="section-desc mb-15">He is the chief of the Child Neurology Division a professor of Pediatrics, at Princes Esra Hospital, Deccan College of Medical Science, Hyderabad, Telangana.</p>
		    <p class="section-desc mb-15">He was awarded as Best Doctors South 2022, and Outlook as Best Neurologist- Pediatric.</p>
		    <p class="section-desc mb-15">He has published many research articles, case series and case reports in Indexed Journals. </p>
		    <p class="section-desc mb-15">Dr Habib’s Foster CDC- Child Development Centre is led by Dr Habib G Pathan. His interdisciplinary team includes qualified and experienced developmental neurologists, clinical psychologists, occupational therapists, speech and language therapists, behavioral therapists, special educators, physiotherapists, and genetic counselors.</p>
		    <p class="section-desc mb-15">Dr. Habib G Pathan is a renowned pediatric neurologist in Hyderabad with more than 18 years of experience. He treats all types of neurological disorders, syndromes and defects in children including headaches, migraines, epilepsy, febrile seizures, strokes, learning disabilities such as dyslexia, dysgraphia, muscle disorders such as hypotonia, dystonia, dyskinesia, myopathies, and muscular dystrophies; developmental delays, learning and attentional difficulties such as ADHD (attention deficit hyperactivity disorder), Autism and Asperger’s Syndrome; Angelman syndrome, movement disorders & physical disabilities such as cerebral palsy; neurodevelopmental disorder, encephalitis, meningitis, insomnia; fatigue; sleep disorders; congenital brain and spinal cord disorders.</p>
		    <p class="section-desc mb-15">He has a special interest in the evaluation, diagnosis, intervention, and counseling of children with Autism (autism spectrum disorder), ADHD, learning disability (Dyslexia), intellectual disability, and other neurodevelopmental disorders.</p>
		    <p class="section-desc mb-15">At Dr. Habib’s Foster CDC - Child Development Centre, Dr. Habib, and his team make specialized, holistic, outcome-oriented, customized, and individualized online intervention programs to help families and children with autism spectrum disorder (ASD), attention deficit hyperactivity disorder (ADHD), Learning Disability (LD), Cerebral Palsy (CP), Intellectual Disability (ID) and other behavioral problems.</p>
		';
		return $data;
	}
	else if($slug === 'dr-sadiya')
	{
		$data['name'] = 'Dr. Sadiya Akhter';
		$data['content'] = "
			<p class='section-desc mb-15'>BOT, MOT (Musculoskeletal)</p>
			<p class='section-desc mb-15'>Expert NDT & Sensory Integration Therapist</p>
			<p class='section-desc mb-15'>Senior Occupation Therapist at Dr. Habib's Foster CDC (Child Neuro Care), Hyderabad, India.</p>
			<p class='section-desc mb-15'>Dr. Sadiya is a highly respected and accomplished occupational therapist with over 5 years of experience in the field of occupational therapy. She is known for her integrity, innovative approach to therapy, and her unwavering commitment to supporting and advocating her patients.</p>
			<p class='section-desc mb-15'>Throughout her career, Dr. Sadiya has consistently demonstrated her dedication to improving the lives of individuals of all ages through occupational therapy. She is highly skilled at developing customized treatment plans that are tailored to the unique needs and goals of her patients. She is always seeking cutting-edge and innovative ways and methods to enhance her skills and techniques.</p>
			<p class='section-desc mb-15'>She has attended OTICON conferences and has published articles in reputed journals.</p>
		";
		return $data;
	} 
	else if($slug === 'dr-zafar')
	{
		$data['name'] = 'Dr. Zafar Sultana';
		$data['content'] = '
		<p class="section-desc mb-15">MBBS, MD, PGDDN</p>
		<p class="section-desc mb-15">Postgraduate Diploma in Developmental Neurology </p>
		<p class="section-desc mb-15">(CDC, TRIVANDRUM)</p>
		<p class="section-desc mb-15">Dr Zafar Sultana has completed Developmental Neurology from the most prestigious institute; CDC, Trivandrum, Kerala. She is a professor of Anatomy at Deccan College of Medical Sciences, Hyderabad, India. She has more than a decade long experience in developmental neurology.</p>
		<p class="section-desc mb-15">She works as a child developmental & behavioral neurology expert at Dr. Habib’s Foster CDC specializing in general pediatric neurology with expertise in developmental & behavioral neurology, autism, and cerebral palsy.</p>
		<p class="section-desc mb-15">Dr. Zafar’s work involves evaluation, diagnosis, intervention, and counseling for children with:</p>
		<ul>
		<li>Developmental concerns (delayed development, delayed speech, motor disorders, spasticity, intellectual disabilities)</li>
		<li>Syndromic concerns (Down Syndrome, Fragile X Syndrome, Prader-Willi Syndrome, Tuberous Sclerosis, Angelman Syndrome, Rett Syndrome)</li>
		<li>Behavioral concerns (hyperactivity, impulsivity, inattention, aggression, bed wetting and elimination disorders, eating disorders, sleep disturbances)</li>
		<li>Academic concerns (reading and writing difficulties, handwriting concerns, learning disabilities- dyslexia, dysgraphia, dyscalculia, poor school performance)</li>
		<li>Emotional and mood disturbances (anxiety, withdrawal, depression, issues of adolescence, suicidal ideation).</li>
		</ul>
		<p class="section-desc mb-15">She is responsible for final decisions made regarding policies and procedures as well as the smooth functioning of FOSTER CDC.</p>
			';
		return $data;
	}
	else
	{
		$data['name'] = '';
		$data['content'] = '';
		return $data;
	}
}

?>