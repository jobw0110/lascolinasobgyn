<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Article Lounge</title>
	<link rel="stylesheet" href="css/lascolinas.css">
	<link rel="stylesheet" href="css/article.css">
	<link rel="stylesheet" href="css/superfish.css"> 
	
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
		
	<script src="js/superfish.js"></script>
	<script src="js/menu.js"></script>
	<script>
		$(document).ready(function() {
			$("section li").click(function(){
				//$(this).toggleClass("minus");
				$(this).next().slideToggle();
			});
			/*var href = new Array();
			var title = new Array();
			var section = new Array();
			var index = 0;
			$("section > ul > li").each(function(){
				var text = $(this).text();

				$(this).next("div").find("a").each(function(){
					href.push($(this).attr("href"));
					title.push($(this).text());
					section.push(text);
				});
				console.log(text);
			});

			console.log(href);
			$.ajax({        
			       type: "POST",
			       url: "article_update.php",
			       data: { hrefs : href,
			       		   titles : title,
			       		   sections : section 
			       		 },
			       success: function(result) {
			            //console.log(result);
			       }
			    });
			   */
			
		}); // end ready
	</script> 
</head>
<?php $spanish = "espanol_article.php"; ?>
<body>
<?php include("header.php"); ?>
<h1>Article Lounge</h1>
<section>
	<img src="images/article.jpg">
	<p>You can count on Las Colinas OB/GYN to keep you informed! Check back frequently for News, Events, and Published Work from our associates. </p>
	<ul>
		<li>General Gynecology</li>
		<div>
			<a href="English/publications/PMR.pdf" target="_blank">Pelvic Muscle Rehab</a>
			<a href="http://www.mydigitalpublication.com/publication/?i=62733&p=12" target="_blank">Gynecology & Your Quality of Life</a>
		</div>
		<li>Birth Control</li>
		<div>
			<a href="English/publications/Dialogues_Fall07.pdf" target="_blank">Dialogues in Contraception&reg;</a>
			<a href="English/publications/AdvancesArticle3.pdf" target="_blank">New Minimally Invasive Procedure Delivers Permanent Steralization</a>
		</div>
		<li>Bladder Disorders</li>
		<div>
			<a href="English/publications/lascolinas_bladder_disorders.pdf" target="_blank">Reclaim Quality of Life Through Successful Incontinence Care</a>
			<a href="English/images/pdfs/Diagnosis_Treatment_Management_Incontinence.pdf" target="_blank">Diagnosis, Treatment, & Management of Incontinence</a>
			<a href="English/publications/ic_doc.pdf" target="_blank">Unmasking the Many Faces of interstitial cystitis (IC) online survey</a>
			<a href="English/publications/OAB.pdf" target="_blank">Overactive Bladder (OAB) Syndrome:Bridging the Clinical Gap; November, 2007</a>
			<a href="English/publications/urinary.pdf" target="_blank">Urinary Incontinence</a>
			<a href="English/publications/AdvancesArticle2.pdf" target="_blank">A New Surgical Approach to Female Stress Urinary Incontinence Now Under Way</a>
			<a href="English/publications/Incontinence_options.pdf" target="_blank">Incontinence Options</a>
			<a href="English/publications/Bladder_Health_Questionnaire.pdf" target="_blank">Bladder Health Questionnaire</a>
			<a href="English/publications/pelvic_floor_exercises.pdf" target="_blank">Pelvic Floor Exercises</a>
			<a href="English/publications/urodynamic_testing.pdf" target="_blank">Urodynamic Testing: Your Guide</a>
			<a href="English/publications/AUGS.pdf" target="_blank">Mesh Midurethral Slings for Stress Urinary Incontinence</a>
			<a href="http://quercetinbromelain.org/natural-treatment-interstitial-cystitis/" target="_blank">Natural Treatment For Interstitial Cystitis</a>
		</div>
		<li>Endometrial Ablation</li>
		<div>
			<a href="English/publications/AdvancesArticle1.pdf" target="_blank">Cryogenic Therapy - A New Alternative to Hysterectomy</a>
			<a href="English/publications/HTA_English.pdf" target="_blank">Your Period doesn't have to be a sentence</a>
		</div>
		<li>General Health</li>
		<div>
			<a href="https://www.youtube.com/watch?v=3wtUn1gWgaw" target="_blank">Signs and Symptoms of Magnesium Deficiency</a>
			<a href="https://www.youtube.com/watch?v=ZVQhiDpEBZg" target="_blank">Do This to Heal Your Adrenals</a>
			<a href="https://www.youtube.com/watch?v=WD3Ovw2CK0o" target="_blank">How to Replenish the Adrenals</a>
			<a href="https://www.youtube.com/watch?v=e9FG0_3SY1s" target="_blank">Supporting Your Adrenals</a>
			<a href="https://www.youtube.com/watch?v=5KwAMP6H6gI" target="_blank">How to Recognize and Treat Adrenal Fatigue</a>
			<a href="http://www.mbschachter.com/importance_of_magnesium_to_human.htm" target="_blank">The Imortance of Magnesium to Human Nutrition</a>
			<a href="http://regardinghealth.com/nam/RHO/2007/05/Article.aspx?bmkEMC=29580" target="_blank">5 Simple Strategies to Be Stess Free</a>
			<a href="http://www.mayoclinic.org/diseases-conditions/high-blood-cholesterol/in-depth/cholesterol/art-20045192" target="_blank">Cholesterol: Top 5 foods to lower your numbers</a>
			<a href="http://www.foxnews.com/health/2013/02/26/iron-and-zinc-may-prevent-pms/" target="_blank">Iron and Zinc may prevent PMS</a>
			<a href="http://www.truthaboutabs.com/fat-burning-kitchen.htm" target="_blank">Unusual Tips and Foods to Lose Your Stomach Fat</a>
			<a href="/English/publications/LosingWeightDespiteHypothyroidism.pdf" target="_blank">Losing Weight Despite Hypothyroidism</a>
			<a href="http://articles.mercola.com/sites/articles/archive/2010/05/11/toxic-fluoride-contaminates-iceland-volcanic-ash-and-is-killing-animals.aspx" target="_blank">One of the Biggest Health Frauds EVER Perpetrated on the American People...</a>
			<a href="http://articles.mercola.com/sites/articles/archive/2011/01/22/does-fluoride-really-fight-cavities.aspx" target="_blank">Fluoride: The Toxin So Dangerous - Even CDC Now Warns Against Consumption by Infants</a>
			<a href="http://articles.mercola.com/sites/articles/archive/2014/12/13/fluoride-deception.aspx" target="_blank">The Fluoride Deception: An Interview with Christopher Bryson</a>
			<a href="http://articles.mercola.com/sites/articles/archive/2015/05/18/keeping-avocados-fresh.aspx?e_cid=20150518Z1_DNL_art_3&utm_source=dnl&utm_medium=email&utm_content=art3&utm_campaign=20150518Z1&et_cid=DM75180&et_rid=957646984" target="_blank">How to Keep Avocados Fresh for Days</a>
			<a href="http://www.thealternativedaily.com/coconut-oil-thyroid/?utm_source=internal&utm_medium=email&utm_campaign=N150518" target="_blank">The Coconut & Thyroid Connection: How This Tropical Nut Supports Healthy Thyroid Function</a>
			<a href="http://articles.mercola.com/sites/articles/archive/2015/07/22/aspartame-diet-soda-autism-link.aspx?e_cid=20150722Z1_DNL_art_1&utm_source=dnl&utm_medium=email&utm_content=art1&utm_campaign=20150722Z1&et_cid=DM80085&et_rid=1045560488" target="_blank">Aspartame Update: Coke Illegally Claims Diet Soda Can Combat Obesity, and Researchers Propose Autism Link</a>
			<a href="http://articles.mercola.com/sites/articles/archive/2015/07/20/food-additives-safety.aspx?e_cid=20150720Z1_DNL_art_1&utm_source=dnl&utm_medium=email&utm_content=art1&utm_campaign=20150720Z1&et_cid=DM80105&et_rid=1041700093" target="_blank">Flavor Manufacturers’ Trade Group Is the De Facto Regulator of Flavor Additives in the US</a>
		</div>
		<li>Menopause</li>
		<div>
			<a href="http://www.obgmanagement.com/index.php?id=20667&tx_ttnews[tt_news]=174080" target="_blank">"Bioidentical" hormones: What you (and your patient) need to know</a>
			<a href="http://www.regardinghealth.com/nam/RHO/2008/10/" target="_blank">Menopause Flashes</a>
			<a href="http://www.regardinghealth.com/nam/RHO/2007/05/Article.aspx?bmkEMC=29578" target="_blank">Hot Flash Happy Pills? Antidepressants & Menopause</a>
			<a href="http://www.regardinghealth.com/nam/RHO/2007/07/Article.aspx?bmkEMC=30891" target="_blank">Surviving the Menopause Blues</a>
		</div>
		<li>Obstetrics</li>
		<div>
			<a href="English/publications/Hypothyroidism, Health & Happiness.pdf" target="_blank">Hypothyroidism, Health & Happiness</a>
		</div>
		<li>Pelvic Organ Prolapse</li>
		<div>
			<a href="http://www.mydailymoment.com/love/all_love_tips/what_can_kegels_really_do_.php" target="_blank">What Can Kegels Really Do?</a>
			<a href="http://www.mydailymoment.com/love/intimacy/learn_to_kegel.php" target="_blank">Learn to Kegel</a>
			<a href="English/publications/AdvancesArticle4.pdf" target="_blank">Reclaiming Your Body</a>
			<a href="English/publications/Endometriosis_English.pdf" target="_blank">What You Should Know About Endometriosis</a>
			<a href="English/publications/FecalIncontinenceEnglish.pdf" target="_blank">What You Should Know About Fecal Incontinence</a>
			<a href="English/publications/AlternativeForPOP.pdf" target="_blank">Alternative for POP</a>
		</div>
		<li>Pelvic Pain</li>
		<div>
			<a href="http://www.elle.com/beauty/health-fitness/pelvic-therapy-practitioner-amy-stein-interview" target="_blank">if you're in pain "down there," a new kind of very intimate physical therapy may be the cure</a>
		</div>
		<li>Sexual Health</li>
		<div>
			<a href="http://www.yourtango.com/experts/how-to-get-the-woman-your-dreams-com/eating-womans-vagina-healthy-relationship" target="_blank">Is Eating Woman's Vagina Healthy For A Relationship</a>
			<a href="http://www.yourtango.com/2012162197/6-facts-about-lube-everyone-should-know/page/2" target="_blank">6 Facts About Lube Everyone Should Know</a>
			<a href="http://www.anewmode.com/dating-relationships/exercises-enhance-sex-life/?source=thumbnail" target="_blank">Exercises to Enhance Your Sex Life</a>
			<a href="http://www.mydailymoment.com/love/intimacy/how_to_make_bad_sex_better.php?page=6" target="_blank">How to Make Bad Sex Better</a>
			<a href="http://www.mydailymoment.com/love/relationships/8_hot_ways_to_turn_him_on.php?page=4" target="_blank">8 Hot Ways to Turn Him On</a>
			<a href="http://www.mydailymoment.com/love/intimacy/Demystifying-the-Big-O-Does-It-Exist.php" target="_blank">Demystifying the Big O: Does it Exist</a>
			<a href="http://www.mydailymoment.com/love/all_love_tips/when_intercourse_doesn_t_mean_orgasm.php?page=2" target="_blank">When Intercourse Doesn't Mean Orgasm</a>
			<a href="http://www.mydailymoment.com/love/intimacy/7_days_of_great_sex_how_to_make_it_happen.php" target="_blank">7 Days of Great Sex: How to Make it Happen</a>
			<a href="http://www.mydailymoment.com/love/intimacy/revealed_4_secrets_to_great_sex.php" target="_blank">4 Secrets to Great Sex</a>
			<a href="http://www.foxnews.com/health/2013/02/27/fda-approves-drug-for-painful-sex-in-women/" target="_blank">FDA approves drug for painful sex in women</a>
			<a href="English/publications/ImprovingSexualFunctionwithAndrogenTherapy.pdf" target="_blank">Improving Sexual Function with Androgen Therapy</a>
			<a href="English/publications/WomenWithoutOrgasm.pdf" target="_blank">Women Without Orgasm:  Now or Not Ever</a>
			<a href="English/publications/Testosteroneinsufficiencyinwomen.pdf" target="_blank">Testosterone insufficiency in women: fact or fiction?</a>
			<a href="English/publications/TheMostCommonFSD.pdf" target="_blank">The Most Common Female Sexual Dysfunction: Low Interest</a>
			<a href="http://www.news-medical.net/news/20090616/New-findings-on-how-stress-causes-sexual-dysfunction-and-infertility.aspx" target="_blank">New findings on how stress causes sexual dysfunction and infertility</a>
			<a href=" http://m.activebeat.com/diet-nutrition/11-foods-proven-to-boost-sex-drive-at-any-age/" target="_blank">11 Proven Libido-Boosting Foods For Any Age!</a>
			<a href="English/Documents/Sex%20Resource%20Books.pdf" target="_blank">Sex Resource Books</a>
			<a href="English/publications/hypoactive.pdf" target="_blank">Hypoactive Sexual Desire Disorder</a>
			</div>
		<li>Thyroid</li>
		<div>
			<a href="http://www-thyroid.com/html_hypothyroidreport_v2.htm" target="_blank">The Hashimoto's disease and Hypothyroidism Remedy Report</a>
			<a href="English/publications/Hypothyroidism, Health & Happiness.pdf" target="_blank">Hypothyroidism, Health & Happiness</a>
			<a href="http://www.thealternativedaily.com/coconut-oil-thyroid/?utm_source=internal&utm_medium=email&utm_campaign=N150518" target="_blank">The Coconut & Thyroid Connection: How This Tropical Nut Supports Healthy Thyroid Function</a>
		</div>
		</div>
	</ul>
<!--	<h1 id="videos">Videos</h1>
	<ul>
		<li><a href="https://www.youtube.com/watch?v=2r2dsAt5Okw" target="_blank">Pelvic Muscle Exercises</a></li>
		<li><a href="https://www.youtube.com/watch?v=B9FTDqDA_oU" target="_blank">Best Foods for a Woman's Body</a></li>
		<li><a href="https://www.youtube.com/watch?v=nvrParR4D_Q" target="_blank">Top 10 fitness tips for women</a></li>
		<li><a href="https://www.youtube.com/watch?v=nciY-A9Vzkw" target="_blank">Liz's Story - Stress Urinary Incontinence - Obtryx™ Mid-Urethral Sling Procedure</a></li>
		<li><a href="https://www.youtube.com/watch?v=_yTjpKvfdJ4&list=UUzFbz15quyoabP5_lL1i1Dg" target="_blank">Water and Interstitial Cystitis - Why Drinking Water Is Essential</a></li>
		<li><a href="https://www.youtube.com/watch?v=eEjTkOuyI14&list=UUzFbz15quyoabP5_lL1i1Dg&index=7" target="_blank">ICN Diet Series - Snack Ideas </a></li>
		<li><a href="https://www.youtube.com/watch?v=3pN99T-ujrw&index=17&list=UUzFbz15quyoabP5_lL1i1Dg" target="_blank">IC Awareness Ideas and Strategies (Interstitial Cystitis Network) </a></li>
		<li><a href="https://www.youtube.com/watch?v=GMxXQLllfqI&list=UUzFbz15quyoabP5_lL1i1Dg&index=24" target="_blank">How To Tell The Difference Between a UTI and an IC Flare - Revised (Interstitial Cystitis Networks)</a></li>
		<li><a href="https://www.youtube.com/watch?v=GrdlzNIJAOg" target="_blank">Exploring IC Therapies (Interstitial Cystitis Network)</a></li>
	</ul>
-->
</section>
<aside>
	<?php include("aside.php") ?>
</aside>
<?php include("footer.php"); ?> 
</body>
</html>