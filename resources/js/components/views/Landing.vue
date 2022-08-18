<template>
    <v-app >
        <views-navigation :color="color" :flat="flat" />
        <div>
            <!-- ======= Hero Section ======= -->
            <section style="background-color:#1f2630" class="hero-section" id="hero"  v-if="!userId">
                <v-container>
                    <v-row justify="center" class="align-items-center">
                        <v-col cols="12" xl="8" class="hero-text-image">
                            <v-row>
                                <v-col
                                    cols="12"
                                    lg="6"
                                    class="text-center text-lg-left"
                                >
                                    <h1 data-aos="fade-right" style="margin-top:50px" >
                                        <strong style="color:white">Alt</strong><strong style="color:rgba(248,217,75, 0.8)">Ex</strong>
                                    </h1>
                                    <p
                                        class="mb-5"
                                        data-aos="fade-right"
                                        data-aos-delay="100"
                                        style="color:white"
                                        
                                    >
                                        Safe, Fast, and Concise
                                    </p>
                                    <p
                                        class="mb-5"
                                        data-aos="fade-right"
                                        data-aos-delay="100"
                                        style="color:white"
                                    >
                                    Get it now!
                                    </p>
                                    <!-- <v-btn data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500" color="primary" size="100px" rounded x-large class="btn-primary"></v-btn> -->
                                    <p
                                        data-aos="fade-right"
                                        data-aos-delay="200"
                                        data-aos-offset="-500"
                                    >
                                        <a
                                            class="btn btn-started"
                                            style="color:white; background-color:#00a170"
                                            @click="$router.push('/#')"
                                            >Google Play</a
                                        >
                                        <a
                                            style="color:white; background-color:#0883fe"
                                            class="btn btn-started"
                                            href="https://dl.altexc.com/"
                                            >App Store</a
                                        >
                                    </p>
                                </v-col>
                                <v-col
                                    cols="12"
                                    lg="6"
                                    class="hidden-md-and-down" >        
                                        <img
                                        width="500px"
                                        src="svg/Hero.svg"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                                </v-col>
                            </v-row>
                        </v-col>
                    </v-row>
                </v-container>
            </section>
            <!-- End Hero -->

            <section style="background-color:#1f2630" class="hero-section" id="about"  v-if="!userId">
                <v-container>
                    <v-row justify="center" class="align-items-center">
                        <v-row>
                        <center><h3 justify="center" class="align-items-center" style="color:rgba(248,217,75, 0.8)">START YOUR CRYPTO JOURNEY WITH US</h3>
                        <br><span style="color:white">AltEx is the world's first open digital asset trading platform. Preparations began in 2014, after 7 years of continuous development and testing.</span></center>
                            <v-col style="margin-left:10%">
                            <img
                                        width="500px"
                                        src="svg/btc.svg"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="6" style="color:white; ">
                                <v-row style="margin-bottom:40px">  
                                    <v-col cols="12" md="3">
                                        <img
                                        width="100px"
                                        src="svg/globe.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                                    </v-col>
                                    <v-col cols="12" md="9" >
                                        <span>Obtained a Serbian business license, led the innovation of blockchain technology, and promoted the global industrialization of blockchain technology.</span>
                                    </v-col>
                                    <v-col cols="12" md="3">
                                        <img
                                        width="100px"
                                        src="svg/gem.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    >
                                    </v-col>
                                    <v-col cols="12" md="9">
                                        <span>Headquartered in Serbia, it has independent trading business and operation centers in San Francisco, London, Osaka, Paris, Singapore and other countries and regions.</span>
                                    </v-col>
                                    <v-col cols="12" md="3">
                                        <img
                                        width="100px"
                                        src="svg/networking.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                                    </v-col>
                                    <v-col cols="12" md="9">
                                        <span>In line with ending chaos in the industry, formulating industry rules, and guiding the vision of healthy development of the industry, we hired the original IBM technical team to create the world's first securities-level trading platform, committed to providing users with safe, convenient, fair and just digital assets Trading experience.</span>
                                    </v-col>
                                </v-row>
                        </v-col>
                        </v-row>
                    </v-row>
                
                </v-container>

            </section>

            <section style="background-color:#1f2630" class="hero-section" id="about"  v-if="!userId">
                <v-container>
                    <v-row justify="center" class="align-items-center" style="color:rgba(248,217,75, 0.8); ">
                        <v-row style="margin-bottom:50px">
                        <center><h3 justify="center" class="align-items-center" style="color:rgba(248,217,75, 0.8); ">CORE ADVANTAGES</h3>
                        <br><span style="color:white"></span></center>
                            <v-col style="color:white;">
                                <v-row>  
                                    <v-col cols="12" md="3">
                                        <img
                                        width="100px"
                                        src="svg/computer.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                                    </v-col>
                                    <v-col cols="12" md="9">
                                            <h4 style="color:rgba(248,217,75, 0.8)">Safety</h4>
                                            <span><br/>1. Based on the IBM enterprise-level security architecture, using multi-layer hardware isolation
                                                <br/>2. A 24-hour real-time early warning system detects potential cyber attacks
                                                <br/>3. Use the world's leading security protection services outside the system
                                                <br/>4. Use multiple network isolation inside the system to prevent intrusion</span>
                                    </v-col>
                                    <v-col cols="12" md="3">
                                        <img
                                        width="100px"
                                        src="svg/bitcoin.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    >
                                    </v-col>
                                    <v-col cols="12" md="9">
                                        <h4 style="color:rgba(248,217,75, 0.8)">Globalization</h4>
                                        <span><br/>1. Uninterrupted operation of global distributed servers
                                               <br/>2. Global multilingual, multi-regional, multi-currency support</span>
                                    </v-col>
                                </v-row>
                            </v-col>
                                <v-col cols="12" md="6" style="color:white;" >
                                <v-row>  
                                    <v-col cols="12" md="3">
                                        <img
                                        width="100px"
                                        src="svg/computer.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                                    </v-col>
                                    <v-col cols="12" md="9">
                                        <h4 style="color:rgba(248,217,75, 0.8);">High Concurrency</h4>
                                        <span>1. The most advanced distributed system design
                                            2. Dynamically adjust hardware resources according to load conditions
                                            3. Support real-time online transactions for millions of users</span>
                                    </v-col>
                                    <v-col cols="12" md="3" style="margin-top:80px">
                                        <img
                                        width="100px"
                                        src="svg/saving-money.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    >
                                    </v-col>
                                    <v-col cols="12" md="9">
                                    <h4 style="color:rgba(248,217,75, 0.8); margin-top:80px">Saving Money</h4>
                                        <span><br/>1. Provide millisecond-level accurate pen, time, and snapshot data
                                                <br/>2. Provide streaming data subscription interface for institutional investors
                                                <br/>3. Real-time remote backup to ensure data security</span>
                                    </v-col>
                                </v-row>
                        </v-col>
                        </v-row>
                    </v-row>      
                </v-container>
            </section>

            <section style="background-color:#1f2630" class="hero-section" id="about"  v-if="!userId">
                <v-container>                   
                    <v-row justify="center" class="align-items-center">
                        <v-col style="margin-left:10%">
                            <img
                                        width="500px"
                                        src="svg/about.svg"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="6" style="color:white">
                        <center><h3 style="margin-bottom:10px;color:rgba(248,217,75, 0.8)">About Us</h3></center> 
                                <v-row>  
                                    <span style="font-size:1em;margin-bottom:10px">
                                    AltEx is an investment platform where we grow your cryptocurrencies. It is committed in creating the most secure, stable and efficient digital currency trading platform for users around the world.
                                    AltEx is a reliable app. AltEx means Network AltEx its core team comes from a well-known Internet and Financial companies in the world, including many of the practioners and investors in the digital currency industry. AltEx, a safe, fast and concise trading platfrom for cryptocurrency trading
                                    Our company Network AltEx comes from well-known Internet and financial companies in the world, including many of the earliest practitioners and investors in the digital currency industry.
                                    Our company Network AltEx comes from well-known Internet and financial companies in the world, including many of the earliest practitioners and investors in the digital currency industry.
                                    Our platform focuses on allowing people to rent a mining rig that produces Doge and BTC coins. And there are also other investment plan that you can avail.
                                    AltEx is an investment platform where we grow your cryptocurrencies. It is committed in creating the most secure, stable and efficient digital currency trading platform for users around the world. </span>
                                </v-row>
                        </v-col>
                    </v-row>
                </v-container>

            </section>
            <!-- ======= Hero Section ======= -->
             <section style="background-color:#1f2630" class="hero-section" id="company"  v-if="!userId">
                <v-container>                   
                    <v-row justify="center" class="align-items-center">      
                        <v-col cols="12" md="6" style="color:white">
                        <center><h3 style="margin-bottom:10px;color:rgba(248,217,75, 0.8)">Company</h3></center> 
                                <v-row>  
                                    <v-col cols="12" md="6" style="margin-top:20px">  
                                        <ul style="margin-left:25%;color:white">
                                        <li><h5 style="color:white">6 Years
                                            <br/>Blockchain industry experience</h5>
                                        </li>                                        
                                        <li><h5 style="color:white">201 people
                                            <br>Technical team</h5>
                                        </li>
                                        <li><h5 style="color:white">2000
                                            <br>Cooperative agency</h5>
                                        </li>   
                                    </ul>  
                                    </v-col>
                                    <v-col cols="12" md="6" style="margin-top:20px">
                                        
                                        <ul style="margin-left:25%">
                                        <li><h5 style="color:white">4 years
                                            <br>Practical experience in security system operation</h5>
                                        </li>
                                        <li><h5 style="color:white">2014 people
                                            <br>Established</h5>
                                        </li>
                                        <li><h5 style="color:white">52
                                            <br>Branch</h5>
                                        </li>
                                    </ul>        
                                    </v-col>
                                </v-row>
                        </v-col>
                        <v-col style="margin-left:10%">
                            <img
                                        width="500px"
                                        src="svg/company.svg"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                    </v-row>
                </v-container>
            </section>

            <section style="background-color:#1f2630" class="hero-section" id="about"  v-if="!userId">
                <v-container>
                    <v-row justify="center" class="align-items-center">
                        <v-row>
                        <center><h3 justify="center" class="align-items-center" style="color:rgba(248,217,75, 0.8)">Meet the Team</h3>
                        <br><span style="color:white">AltEx is the world's first open digital asset trading platform. Preparations began in 2014, after 7 years of continuous development and testing.</span></center>
                            <v-col cols="12" md="4">
                            <v-card
                                            class="mx-auto"
                                            max-width="344"
                                        >
                                            <v-img
                                            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                                            height="200px"
                                            ></v-img>

                                            <v-card-title>
                                            John Doe
                                            </v-card-title>

                                            <v-card-subtitle>
                                            Lorem Ipsum
                                            </v-card-subtitle>

                                            <v-card-actions>
                                            <v-btn
                                                color="orange lighten-2"
                                                text
                                            >
                                                Explore
                                            </v-btn>

                                            <v-spacer></v-spacer>

                                            <v-btn
                                                icon
                                                @click="show = !show"
                                            >
                                                <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                                            </v-btn>
                                            </v-card-actions>

                                            <v-expand-transition>
                                            <div v-show="show">
                                                <v-divider></v-divider>

                                                <v-card-text>
                                                I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
                                                </v-card-text>
                                            </div>
                                            </v-expand-transition>
                                        </v-card>
                        </v-col>
                        <v-col cols="12" md="4" style="color:white; ">
                                <v-card
                                            class="mx-auto"
                                            max-width="344"
                                        >
                                            <v-img
                                            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                                            height="200px"
                                            ></v-img>

                                            <v-card-title>
                                            John Doe
                                            </v-card-title>

                                            <v-card-subtitle>
                                            Lorem Ipsum
                                            </v-card-subtitle>

                                            <v-card-actions>
                                            <v-btn
                                                color="orange lighten-2"
                                                text
                                            >
                                                Explore
                                            </v-btn>

                                            <v-spacer></v-spacer>

                                            <v-btn
                                                icon
                                                @click="show = !show"
                                            >
                                                <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                                            </v-btn>
                                            </v-card-actions>

                                            <v-expand-transition>
                                            <div v-show="show">
                                                <v-divider></v-divider>

                                                <v-card-text>
                                                I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
                                                </v-card-text>
                                            </div>
                                            </v-expand-transition>
                                        </v-card>
                        </v-col>
                        <v-col cols="12" md="4">
                                <v-card
                                            class="mx-auto"
                                            max-width="344"
                                        >
                                            <v-img
                                            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                                            height="200px"
                                            ></v-img>

                                            <v-card-title>
                                            John Doe
                                            </v-card-title>

                                            <v-card-subtitle>
                                            Lorem Ipsum
                                            </v-card-subtitle>

                                            <v-card-actions>
                                            <v-btn
                                                color="orange lighten-2"
                                                text
                                            >
                                                Explore
                                            </v-btn>

                                            <v-spacer></v-spacer>

                                            <v-btn
                                                icon
                                                @click="show = !show"
                                            >
                                                <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                                            </v-btn>
                                            </v-card-actions>

                                            <v-expand-transition>
                                            <div v-show="show">
                                                <v-divider></v-divider>

                                                <v-card-text>
                                                I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
                                                </v-card-text>
                                            </div>
                                            </v-expand-transition>
                                        </v-card>
                        </v-col>
                        </v-row>
                    </v-row>
                
                </v-container>

            </section>

            <section style="background-color:#1f2630" class="hero-section" id="about"  v-if="!userId">
                <v-container>
                    <v-row justify="center" class="align-items-center">
                        <v-row>
                        <center><h3 justify="center" class="align-items-center" style="color:rgba(248,217,75, 0.8)">Meet the Team</h3>
                        <br><span style="color:white">AltEx is the world's first open digital asset trading platform. Preparations began in 2014, after 7 years of continuous development and testing.</span></center>
                            <v-col cols="12" md="3">
                                <img
                                        width="400px"
                                        src="svg/partner-md-a.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="3" style="color:white; ">
                              <img
                                        width="400px"
                                        src="svg/partner-md-b.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />   
                        </v-col>
                        <v-col cols="12" md="3">
                                 <img
                                        width="400px"
                                        src="svg/partner-md-c.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>

                        <v-col cols="12" md="3">
                                 <img
                                        width="400px"
                                        src="svg/partner-md-d.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="3">
                                <img
                                        width="400px"
                                        src="svg/partner-md-e.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="3" style="color:white; ">
                              <img
                                        width="400px"
                                        src="svg/partner-sm-a.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />   
                        </v-col>
                        <v-col cols="12" md="3">
                                 <img
                                        width="400px"
                                        src="svg/partner-sm-b.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>

                        <v-col cols="12" md="3">
                                 <img
                                        width="400px"
                                        src="svg/partner-sm-c.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="3">
                                <img
                                        width="400px"
                                        src="svg/partner-sm-d.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="3" style="color:white; ">
                              <img
                                        width="400px"
                                        src="svg/partner-xs-a.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />   
                        </v-col>
                        <v-col cols="12" md="3">
                                 <img
                                        width="400px"
                                        src="svg/partner-xs-b.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>

                        <v-col cols="12" md="3">
                                 <img
                                        width="400px"
                                        src="svg/partner-xs-c.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="3">
                                <img
                                        width="400px"
                                        src="svg/partner-xs-d.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        <v-col cols="12" md="3" style="color:white; ">
                              <img
                                        width="400px"
                                        src="svg/partner-xs-e.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />   
                        </v-col>
                        <v-col cols="12" md="3">
                                 <img
                                        width="400px"
                                        src="svg/partner-xs-f.png"
                                        alt="Image"
                                        data-aos="fade-right"
                                    />
                        </v-col>
                        </v-row>
                    </v-row>
                </v-container> 
            </section>

            <section style="background-color:#1f2630" class="hero-section" id="company"  v-if="!userId">
                <v-container>   
                    <v-row>
                        <v-col>
                        
                        </v-col>
                        <v-col>
                            <div class="bg-gradient_solid">
                        <div class="container">
                            <div class="section-header">
                            <strong style="color:rgba(248,217,75, 0.8); font-size:3em">Circuit Diagram</strong>
                            <hr>
                            </div>
                            <div class="steps">
                            <div class="steps-container">
                                <div class="content">
                                <h2></h2>
                                <p>AltEx takes shape</p>
                                </div>
                                <i class="step-line"></i>
                                <div class="date">2015.05</div>
                            </div>
                            <div class="steps-container">
                                <div class="content">
                                <h2></h2>
                                <p>AltEx core logic design completed</p>
                                </div>
                                <i class="step-line"></i>
                                <div class="date">2016.02</div>
                            </div>
                            <div class="steps-container">
                                <div class="content">
                                <h2></h2>
                                <p>AltEx obtains Serbia business license</p>
                                </div>
                                <i class="step-line"></i>
                                <div class="date">2017.03</div>
                            </div>
                            <div class="steps-container">
                                <div class="content">
                                <h2></h2>
                                <p>AltEx exchange goes online</p>
                                </div>
                                <i class="step-line"></i>
                                <div class="date">2018.02</div>
                            </div>
                            <div class="steps-container">
                                <div class="content">
                                <h2></h2>
                                <p>AltEx obtains investment from top capital institutions</p>
                                </div>
                                <i class="step-line"></i>
                                <div class="date">2020.12</div>
                            </div>
                            <div class="steps-container">
                                <div class="content">
                                <h2></h2>
                                <p>AltEx global users exceed 5 million</p>
                                </div>
                                <i class="step-line"></i>
                                <div class="date">2021.12</div>
                            </div>
                            </div>
                        </div>
                        </div>             
                        </v-col>
                        <v-col>
                        </v-col>
                    </v-row>
                </v-container>
            </section>

            

            
            <!-- ======= Hero Section ======= -->
            <!-- End Hero -->
            
            
        </div>
        <v-scale-transition>
            <v-btn
                fab
                v-show="fab"
                v-scroll="onScroll"
                dark
                fixed
                bottom
                right
                color="secondary"
                @click="toTop"
            >
                <v-icon>mdi-arrow-up</v-icon>
            </v-btn>
        </v-scale-transition>
    </v-app>
</template>

<style>

body {
  background: #1f2630;
  }

:root {
  --primary:#1f2630 ;
}
.section-header {
  text-align: center;
}
.section-header h2 {
  font-size: 28px;
  font-weight: 700;
}
.section-header hr {
  border: 1px solid #fff;
  width: 56px;
}
.bg-gradient_solid {
  background: var(--primary-gradient);
  color: #fff;
  padding: 48px 0;
}
.steps {
  position: relative;
  margin-top: 32px;
}
.steps::after {
  content: "";
  position: absolute;
  width: 1px;
  background-color: white;
  opacity: 0.4;
  top: 0;
  bottom: 0;
  left: 50%;
}

.steps .content p {
  color: white;
  font-size: 0;
}

.steps .content h2 {
  font-weight: 600;
  font-size: 16px;
  color: #676767;
}

.steps-container {
  position: relative;
  background-color: inherit;
  width: calc(50% + 32px);
}

.steps-container .content {
  padding: 32px;
  background-color: rgba(248,217,75, 0.8);
  position: relative;
  border-radius: 0px 0px 80px 0px;
  box-shadow: 0px 16px 27px rgb(0 11 30 / 10%);
}

.steps .steps-container:nth-child(even) {
  left: calc(50% - 32px);
  flex-direction: row-reverse;
}

.steps-container {
  display: flex;
}

.steps .steps-container .date {
  font-weight: 900;
  font-size: 16px;
  color: #ffffff;
  margin-bottom: 10px;
  width: 70px;
  height: 70px;
  background-color: var(--primary);
  border-radius: 50%;
  flex-shrink: 0;
  align-items: center;
  display: flex;
  justify-content: center;
  z-index: 1  ;
}

.step-line {
  width: 40px;
  background-color: #fff;
  height: 1px;
  margin-top: 31px;
  opacity: 0.4;
  flex-shrink: 0;
}

@media (max-width: 767px) {
  .steps::after {
    left: 32px;
  }
  .steps-container {
    left: 0;
    flex-direction: row-reverse;
    width: auto;
    margin-bottom: 16px;
  }
  .steps .steps-container:nth-child(even) {
    left: 0;
  }
}
</style>

<script>
export default {
    name: "app",
    data() {
        return {
            fab: null,
            userId: sessionStorage.getItem("user-id"),
            color: "",
            flat: null,
            hospital: { id: 1025167, lat: 6.9214, lng: 122.075 },
            hospitals: [
                { id: 1025167, lat: 6.9214, lng: 122.075 },
                { id: 1025168, lat: 6.9225, lng: 122.0771 },
                { id: 1025169, lat: 6.9246, lng: 122.0712 },
                { id: 1025170, lat: 6.9237, lng: 122.0783 },
                { id: 1025171, lat: 6.9258, lng: 122.0794 }
            ],
            hospitalsLatLng: [
                { id: 1025167, lat: 6.9214, lng: 122.075 },
                { id: 1025168, lat: 6.9225, lng: 122.0771 },
                { id: 1025169, lat: 6.9246, lng: 122.0712 },
                { id: 1025170, lat: 6.9237, lng: 122.0783 },
                { id: 1025171, lat: 6.9258, lng: 122.0794 }
            ],
            //Google Maps Variables
            center: { lat: 6.9214, lng: 122.079 },
            address: { lat: 6.9214, lng: 122.079 },
            //Modals
            hospitalDialog: false
        };
    },

    methods: {
        onScroll(e) {
            if (typeof window === "undefined") return;
            const top = window.pageYOffset || e.target.scrollTop || 0;
            this.fab = top > 60;
        },

        toTop() {
            this.$vuetify.goTo(0);
        },

        fetchHospitals() {
            this.hospitalsLatLng = [];
            axios
                .get("/api/v1/nearbyhospitals", {
                    params: {
                        lat: this.center.lat,
                        lng: this.center.lng
                    }
                })
                .then(response => {
                    this.hospitals = response.data.nearby;
                    let hospitals = response.data.nearby;
                    hospitals.forEach(hospital => {
                        var position = {
                            ...hospital,
                            lat: hospital.latitude,
                            lng: hospital.longitude
                        };
                        this.hospitalsLatLng.push(position);
                    });
                    console.log(this.hospitalsLatLng);
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => {
                    this.tableLoading = false;
                    this.componentOverlay = false;
                });
        },

        showHospital(id) {
            this.hospital = this.hospitals.find(x => x.id === id);
            console.log(this.hospital);
            this.hospitalDialog = true;
        },

        //Get Address to current location
        getUserGeolocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    this.setUserGeolocation
                );
            } else {
                window.clearInterval(window.locationInterval);
                alert("Geolocation is not supported by this browser.");
            }
        },

        //Set Address to current location
        setUserGeolocation(position) {
            var UserGeolocationLatitude = position.coords.latitude;
            var UserGeolocationLongitude = position.coords.longitude;
            this.center = {
                lat: UserGeolocationLatitude,
                lng: UserGeolocationLongitude
            };
            this.address = this.center;
        },

        chipColor(status) {
            if (status == "RECIEVING") {
                return "success";
            } else {
                return "red";
            }
        }
    },

    watch: {
        fab(value) {
            if (value) {
                this.color = "#f8f9fa";
                this.flat = false;
            } else {
                this.color = "transparent";
                this.flat = true;
            }
        }
    },

    created() {
        this.toTop();
        const top = window.pageYOffset || 0;
        if (top <= 60) {
            this.color = "transparent";
            this.flat = true;
        }
        this.fetchHospitals();
    },

    beforeRouteEnter(to, from, next) {
        // if (sessionStorage.getItem("user-type")) {
        //     if (sessionStorage.getItem("user-type") == "ADMINISTRATOR") {
        //         return next("admin/dashboard");
        //     } else if (sessionStorage.getItem("user-type") == "SUBSCRIBER") {
        //         return next("/dashboard");
        //     }
        // }
        next();
    }
};
</script>
