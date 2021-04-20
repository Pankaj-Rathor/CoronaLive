<style type="text/css">
	*{
		margin: 0;
		padding: 0; 
		box-sizing: border-box; 
		font-family: 'Kaushan Script', cursive;
	}

	.bg-nav{
		background-color: #ff8a80 !important;
	}
	.main-header{
		width: 100%;
	}

	.right-side h1{
		font-size: 34px;
	}

	.left-side img{
		width: 500px;
		height: 300px;
	}

	.corona-root img{
		border-radius: 50%;
		animation: corona 3s linear infinite;
	}

	@keyframes corona{
		0%{transform: rotate(0);}
		100%{transform: rotate(360deg);}
	}

	.left-side img{
		position: relative;
		animation: updown 3s linear infinite;
	}

	@keyframes updown{
		0%   {left: 0px;}
		25%  {left: 8px;}
		50%  {left: 16px;}
		75%  {left: 8px;}
		100% {left: 0px;}
	}

	.corona-update{
		margin: 50px 0 20px 0;
		text-align: center;
	}

	.corona-update h3{
		font-weight: bold;
		color: #3f51b5;
	}

	.corona-update h1{
		font-size: 18px;
	}

	.corona-update p{
		font-size: 18px;
	}

	.sub-section{
		text-align: center;
		background-color: #fbfafd;
	}

	.footer-bg{
		background-color: #ff8a80;
	}
	.footer-bg p{
		margin-bottom: 0 !important;
		font-size: 20px;
	}

	.copy{
		font-weight: bold;
		font-family: cursive;
		font-size: 28px;
		color: black;
	}

	.row{
		margin-right: 0 !important;
		margin-left: 0 !important;
	}
	/*********** top scroll ***********/
	#myBtn{
		display: none;
		position: fixed;
		bottom: 43px;
		right: 20px;
		z-index: 99;
		border: none; 
		outline: none;
		background-color: #00A8FF;
		color: white;
		cursor: pointer; /* Add a mouse pointer on hover */
		padding: 10px; 
		border-radius: 10px; /* Rounded Corners */
	}

	#myBtn:hover{
		background: #606060; /* Dark-gray background on hover*/
	}

	@media(max-width: 768px){
		.main-header{text-align: center;}
		.row{
			margin-right: 0px !important;
			margin-left: 0px !important;
		}
		.main-header h1{
			text-align: center;
			padding: 0;
			width: 100%;
			font-size: 30px;
		}

		.count-style{
			display: inline !important;
		}

		.count-style p{
			text-align: center;
		}

		.left-side img{
			width: 400px;
			height: 300px;
		}

	}
</style>