<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
  .hero-content{
    padding-bottom: 115px !important;

  }.hero-title{
    margin-top: 60px;

  }.insu-div1{
    margin-top: 25px;
  }
  .insu-div1{
    margin-top: 30px;
  }.insu-span1{
    color:red !important;
  }.insu-para1{
    color: #118b0f !important;
  }.insu-head1{
    text-align: center; color: #0d3e21;
  }.para-img{
    padding-left: 30px; text-align:center;
  }.insu-div2{
    margin-top: 30px;
  }
  .ins-img1{
          padding-left: 180px;
        }.ins-img2{
          padding-left: 100px;

        }.ins-img4{
          padding-left: 150px;
        }
        .ins-img3{
          padding-left: 130px;
  }.para-img{
    padding-left: 30px;

  }.para-img4{
    padding-left: 70px;
  }.para-img1{
    padding-left: 80px;
  }.para-img2{
    padding-left: 100px;
  }
  @media screen and (max-width:600px) {
          .ins-img1{
            padding-right: 130px;
          }.ins-img2{
            padding-right: 70px;
          }
          .ins-img3{
            padding-right: 90px;
          }
          .ins-img4{
            padding-right: 100px;
          }.para-img{
            padding-right: 20px;
          }.para-img1{
            padding-right: 50px;
          }.para-img2{
            padding-right: 100px;
          }.para-img3{
            padding-right: 150px;
          }.para-img4{
              padding-right:80px;
              
             
          }
        }
        @media screen and (max-width: 991.98px){
.single-service{
  padding-top:0px;

}}


</style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background"/></div>
        <div class="container"> 
          <div class="hero-content" > 
            <div class="row"> 
              <div class="col-12 col-lg-5">
                <h2 class="hero-title" >Insurance</h2>
                <p class="hero-desc"></p>
               <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12 insu-div1" > 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                  <li class=""><a href="<?= base_url('insurance') ?>">Insurance</a></li>
                </ol>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!--
      ============================
      About #1 Section
      ============================
      -->
      
    
       <section >
        <div class="container">
        <div class="row">
          <div class="col-md-12 in-top insu-div2" >
            <h4><span class="insu-span1">* </span>Conditions Apply For Above Mentioned Insurance Company</h4><p class="insu-para1">For more details Contact Claim / Insurance Department:</p>
            <h3>+91 90039 22076 | claim@geminstitute.in</h3>
            
          </div>

        </div></div>
      </section>
      
      <section class="single-service">
        <div class="container">
          <div class="row">
            <div class="entry-infos core-values">
              
              <h4  class="insu-head1">Below Mentioned Insurance Company Accepted</h4>
              <!---<p class="entry-desc">Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people, and provide care and treatment for the sickest in our community including rehabilitation and aged care.</p>--->
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!--<h5>medical check ups</h5>-->
                      <img  src="<?= base_url('frontend/assets/images/insurance/star-150x140.png') ?>"  class="ins-img1"/>
                      <h5 class="para-img">STAR HEALTH AND ALLIED INSURANCE COMPANY</h5>
                      <!--<p>Recognised as a world renowned institution. consult our doctors by visiting us.</p>-->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>medical treatment</h5>--->
                      <img  src="<?= base_url('frontend/assets/images/insurance/hdfc.png') ?>" class="ins-img2"/>
                      <h5  class="para-img">HDFC ERGO GENERAL INSURANCE COMPANY</h5>
                      <!---<p>Free or low cost coverage adults with limited income recognised.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/paramount.png') ?>" class="ins-img4"/>
                      <h5  class="para-img4">PARAMOUNT HEALTH INSURANCE TBA PVT LTD <span class="insu-span1">*</span></h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Research Pros</h5>--->
                      <img  src="<?= base_url('frontend/assets/images/insurance/chola.png') ?>" class="ins-img2"/>
                      <h5  class="para-img">CHOLA MS GENERAL INSURANCE COMPANY</h5>
                      <!---<p>All medical aspects practice for family, our reception staff with any medical enquiry.</p>---->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img  src="<?= base_url('frontend/assets/images/insurance/tata-aig-150x140.png') ?>"  class="ins-img1"/>
                      <h5  class="para-img1">TATA AIG GENERAL INSURANCE CO LTD</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img  src="<?= base_url('frontend/assets/images/insurance/medi-assit.png') ?>" class="ins-img2"/>
                      <h5   class="para-img1">MEDI ASSIST INDIA TPA PVT LTD  <span class="insu-span1">*</span></h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/family.png') ?>" class="ins-img3"/>
                      <h5   class="para-img2">FAMILY HEALTH PLAN TPA PVT LTD  <span class="insu-span1">*</span></h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/manipal.png') ?>" class="ins-img2"/>
                      <h5 style="padding-left: 100px;" class="para-img1">MANIPALCIGNA INSURANCE</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/acko.png') ?>" class="ins-img2"/>
                      <h5  class="para-img1">ACKO GENERAL INSURANCE CO LTD</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/digit.png') ?>" class="ins-img2"/>
                      <h5 style="padding-left: 100px;" class="para-img1">GODIGIT INSURANCE CO LTD</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img  src="<?= base_url('frontend/assets/images/insurance/ericson.png') ?>" class="ins-img2"/>
                      <h5 style="padding-left: 150px;" class="para-img2">ERICSON TPA PVT LTD  <span class="insu-span1">*</span> </h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img  src="<?= base_url('frontend/assets/images/insurance/sbi.png') ?>"
                       class="ins-img2"/>
                      <h5 class="para-img1">SBI GENERAL INSURANCE CO LTD</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img  src="<?= base_url('frontend/assets/images/insurance/government.png') ?>" class="ins-img2"/>
                      <h5  class="para-img">TAMILNADU NEW HEALTH INSURANCE SCHEME (GOVT EMPLOYEE)</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img src="<?= base_url('frontend/assets/images/insurance/government2.png') ?>" class="ins-img2"/>
                      <h5  class="para-img">TAMILNADU NEW HEALTH INSURANCE SCHEME (PENSIONER)</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/government3.png') ?>" class="ins-img2"/>
                      <h5  class="para-img">TAMILNADU NEW HEALTH INSURANCE SCHEME (CO-OPERATIVE)</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/government4.png') ?>" class="ins-img2"/>
                      <h5  class="para-img">CHIEF MINISTER’S HEALTH INSURANCE SCHEME</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/tnpl.png') ?>" class="ins-img2"/>
                      <h5 style="padding-left: 200px;" class="para-img3">TNPL</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <img   src="<?= base_url('frontend/assets/images/insurance/cfa.png') ?>" class="ins-img2"/>
                      <h5 style="padding-left: 150px;" class="para-img2">CORDITE FACTORY</h5>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End .col-lg-6-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>