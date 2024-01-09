<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?php echo $title ?? 'CDC Home'; ?></title>
        <meta name="description" content="">

        <?php $this->load->view("includes/links"); ?>

    </head>
    <body>
        
        <?php $this->load->view("includes/navbar"); ?>
        
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs">
            <img src="<?php echo base_url() ?>assets/images/breadcrumbs-bg.jpg" alt="Breadcrumbs Image">
            <div class="container">
                <div class="breadcrumbs-content">
                    <h1 class="title"><?php echo $sub_title ?? 'CDC Service page'; ?></h1>
                    <div class="page-path text-center">
                        <ul>
                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                            <li><?php echo $sub_title ?? 'CDC Service page'; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        
        <!-- Blog Details Start -->
        <div class="rs-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-md-30">
                        <div class="h-img">
                            <img src="<?php echo base_url() ?>assets/images/blog-single/1.jpg" alt="Blog Single">
                        </div>
                        <div class="h-desc">
							<h2 class="blog-single-title primary-color">Early Intervention Services for Children</h2>
                            <p>Early and effective support for young children and adolescents who are at risk of facing problems in the long run. The objective is to intervene early and provide an effective approach to tackle a mental health issue before it takes a toll on the child’s health.</p>                  
                            <p>Early intervention programs help prevent health issues from occurring; tackle them spot-on when they occur, or deal with the issues before they become worse. A wide range of early intervention programs under the aegis of expert therapists foster necessary skills, strengthen them, and prepare a child for future life.</p>                  
                            <p>Dr. Habib’s Foster CDC offers many early intervention programs ranging from programs supporting vulnerable parents to school-based programs that help improve children’s behavioral, emotional and social skills. The center also provides programs and mentoring schemes for young adolescents who are vulnerable to involvement in unsociable activities.</p>
                            <h3>Early intervention based on pre-identified Risk Factors</h3>
                            <p>Our therapists understand the risk factors that pose a threat to a child’s development and limit future economic and social opportunities. The risk factors also increase the likelihood of mental and physical health problems later in life. These factors exist at individual, family, community and society level and interact in intricate ways. Our experts also identify protective factors – such as poor parental mental health and good parental mental health – which may act in favor or against the child’s emotional, behavior and social skills (good or bad mental health or academic attainment).</p>
                            <p>Taking a note of risk factors help our experts identify children who are at risk – and therefore, need support and care. According to studies, early intervention works best when it is employed based on the identification of pre-determined risk factors.</p>
                            <h3>Our Early Intervention Programs</h3>
                            <p>Dr. Habib’s Foster CDC provides both targeted selective interventions and targeted indicated interventions. The former program is offered to families based on family status (ethnic minority), family income, and nature of parenthood. Selective interventions help keep serious problems from occurring. Targeted interventions are provided to a child and their family based on the identification of a specific or diagnosed problem. In this case, early intervention can’t prevent the problem from occurring, but it has the potential to reduce or minimize its impact on the child’s development.</p>
                            <h3>Benefits for a child</h3>
                            <p>Early intervention programs at foster CDC work on improving the major aspects of child development – emotional, behavioral, social and physical. They have a huge potential in making a huge difference in the lives of children and providing benefits to children throughout their lives.</p>
                            <h3>Behavioral development</h3>
                            <p>Children learn behavior self-regulatory skills – the ability to monitor their own behavior, impulses and attention. These skills are essential to built positive relationships with their peers and other children and also their success in school.</p>
                            <h3>Emotional and Social Development</h3>
                            <p>Our programs impart the development of self-esteem, and the ability to control negative feelings and thoughts. Children will become aware of their own emotional needs and the emotional needs of others. Our early interventional programs help children learn the ability to built positive relationship with other children; improved self-esteem and reduction in the risk of clinically diagnosed mental health issues and depression.</p>
                            <h3>Cognitive development</h3>
                            <p>Cognitive development involves acquisition of language and speech skills, numeracy capabilities, reading and writing capabilities and understanding of logical problem-solving abilities.  A child’s success in school, sports and also in his or her career is strongly associated with a positive cognitive development.</p>
                            <h3>Physical development</h3>
                            <p>Physical development outcomes attributed to early interventions include improving birth outcomes, decreasing the incidences of infectious diseases, and childhood obesity.  In general, physical development ensures overall positive development in all areas of a child’s life.</p>
                            <h3>Early Intervention at Any Stage of a Child’s Life</h3>
                            <p>Many experts debate that early intervention will have its strongest impact when it is offered during the first few years of a child’s life. But the best evidence indicate that effective interventions can improve children’s life chances at any point during childhood and adolescence.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-40 mpl-15">
                        <div class="h-sidebar">
                            <?php $this->load->view('includes/service_page_sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details End -->
       
        <!-- Footer -->
        <?php $this->load->view("includes/footer"); ?>
        <!-- Footer -->

        <!-- Scripts -->
        <?php $this->load->view("includes/scripts"); ?>
        <!-- Scripts -->

    </body>
</html>