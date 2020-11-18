<?php
header('Content-type: text/css; charset:UTF-8');
?>
	*{margin: 0;
	 padding: 0;
	 text-decoration:none;}

	body{
		margin:0 auto;
		width: 90%;
	}
	.slider{
	overflow: hidden;
	height: 500px;
	width: 800px;
	}
	.slider figure div{
	float : left;
	width: 20%;

	}
	.slider figure img{
	width: 100%;
	float: left;
	}
	.slider figure{
	position: relative;
	width: 500%;
	margin:0px;
	left:0;
	animation: 20s ravi infinite;

	}
	@keyframes ravi{
	0%{
	left:0%

	}
	10%
	{
		left: 0%;
	}
	12%{
		left: -100%;
	}
	22%{
		left: -100%;
	}
	24%{
		left: -200%;
	}
	34%{
		left: -200%;
	}
	36%{
		left: -300%;
	}
	46%{
		left: -300%;
	}
	48%{
		left: -400%;
	}
	58%{
		left: -400%;
	}
	60%{
		left: -300%;
	}
	70%{
		left: -300%;
	}
	72%{
		left: -200%;
	}
	82%{
		left: -200%;
	}
	84%{
		left: -100%;
	}
	94%{
		left: -100%;
	}
	96%{
		left: 0%;
	}
	}

	* {padding: 0;margin:0;}
	a {text-decoration: none;}
	li {list-style: none;}


.main-nav {
	text-align: center;
	 background: linear-gradient(to right, #ff105f,#ffad06);
	 border-radius: 30px;
	 padding-bottom: 10px;
	}

.main-nav ul{

	color: #FFF;
	display: inline-flex;
	list-style: none;
}
input.largerCheckbox { 
            width: 20px; 
            height: 20px; 
        } 
.main-nav ul li a {
	text-transform: uppercase;
	text-decoration: none;
	color: #FFF;
	display: block;
	width: 120px;
	height: 50px;
	margin: 20px;
	padding: 5px;
	}
.main-nav a:hover {
    height: 50px; 
    width: 120px;
	 background: linear-gradient(to left, #ff105f,#ffad06);
	 border-radius:20px;
    }

    </style>