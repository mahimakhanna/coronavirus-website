<style type="text/css">
html{scroll-behaviour:smooth;}
*{margin:0;
padding:0;
box-sizing:border-box;
font-family: 'Baloo 2', cursive;
 }
.nav_style{background-color:#a29bfe!important;}
.nav_style a{color:white;}

<!------------------------------------>
<!----------paragraph transition----->




<!------->
.main_header{ background-color: black;
  color: white; height:300;
width:100%;}
.main_header1{background-color: black;
  color: white; height:300;
}


.rightside{
font-size:3rem;}

.crona_rot img{animation:ic1 3s linear infinite;
}
@keyframes ic1{
0%{transform:rotate(0);}
100%{transform:rotate(360deg);}
}

.leftside img
{

animation:hello 5s linear infinite;
}
@keyframes hello{
0%
{
transform:rotate(0);
}
20%
{
transform:rotate(360deg);}}
<!-- &&&&&&&&&&&&&&&&&&&&-->
.corona_update
{margin:0 0 30px 0;
}
.corona_update h1{
color:#FF7675;
}
.corona_update h2{
font-size:2rem;text-align:center;
}


.section_header{background-color:#eb34e5;}

}
<!------subheader----->
.section_header h3{
animation-duration: 3s;
  animation-name: slidein;
  animation-iteration-count: infinite;
  animation-direction: alternate;}
@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}





<!-----formmmm9999999999999999999999-->
input[type=text], select,  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background-color: #a29bfe!important;
  margin-top: 20px;
}
<!----------------------------------------------->
.contact-caption {
    background: #3a9dca;
}
.contact-heading h2 {
    color: #fff;
    font-size: 90px;
}
.contact-info {
    padding-left: 40px;
}
.contact-info h3 {
    padding-left: 0;
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    border-bottom: 1px solid #13849c;
    padding-bottom: 12px;
    margin-bottom: 0;
}
.contact-form h3 {
    padding-left: 0;
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    border-bottom: 1px solid #13849c;
    padding-bottom: 12px;
    margin-bottom: 0;
}
.contact-info ul {
    margin: 0;
    padding: 0;
}
.contact-info ul li {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    color: #fff;
}
.contact-info i.fa {
    font-size: 16px;
    padding-right: 12px;
    width: 25px;
    height: 38px;
}
.contact-info ul li span {
    font-weight: bold;
}
.contact-form input {
    width: 100%;
    height: 40px;
    background: #fff;
    font-size: 13px;
    color: #084a5c;
    font-family: 'Open Sans', sans-serif;
    padding: 12px;
    border: 0;
    margin-bottom: 12px;
}
.contact-form textarea {
    font-family: 'Open Sans', sans-serif;
    padding: 12px;
    width: 100%;
    height: 140px;
    border: 0;
    margin-bottom: 12px;
}
.info-detail {
    border-top: 1px solid #53cde5;
    padding-top: 15px;
}
.form {
    border-top: 1px solid #53cde5;
    padding-top: 15px;
    text-align: right;
}
.contact-form input.submit-btn {
    width: 180px;
    height: 50px;
    float: right;
    font-size: 24px;
    color: #fff;
    background: url(../img/btn-bg.jpg);
    background-repeat: no-repeat;
    padding: 0;
    font-family: 'BenchNine', sans-serif;
    font-weight: bold;
}
/*.element {
  animation: pulse 5s infinite;
}

@keyframes pulse {
  0% {
    background-color:#FFFF00 ;
  }
  20% {
    background-color: ;
  }


40% {
    background-color: #00FF00;
  }
60% {
    background-color: ;
  }
80% {
    background-color: ;
  }
100% {
    background-color: ;
  }
}*/

<!-----flex box----->
#sympid
 {
  animation:  symptoms shake 0.5s linear;
  animation-iteration-count: infinite;
}

@keyframes symptoms {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style> 