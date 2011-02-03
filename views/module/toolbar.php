<style type="text/css" media="screen">
	#nsm-web-profiler{
		border-top:1px solid #ccc;
		color:#333!important;
		font-size:11px;
		line-height:16px;
		position:fixed; bottom:0; right:0; left:0;
		padding:5px 9px;
		background: #FFFFFF; /* old browsers */
		background: -moz-linear-gradient(top, #FFFFFF 0%, #E0E0E0 100%); /* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(100%,#E0E0E0)); /* webkit */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FFFFFF', endColorstr='#E0E0E0',GradientType=0 ); /* ie */
		-webkit-box-shadow:0 -2px 2px rgba(0,0,0,.1);
		-moz-box-shadow:0 -2px 2px rgba(0,0,0,.1);
		vertical-align:middle;
		text-transform:uppercase
	}
	#nsm-web-profiler > span,
	#nsm-web-profiler > a {
		border-right:1px solid #ccc; 
		color:inherit;
		margin-right:5px; 
		padding-right:9px;
	}
	#nsm-web-profiler a {
		color:inherit;
	}
	#nsm-web-profiler img{
		vertical-align:middle;
	}
</style>
<div id="nsm-web-profiler">
	<span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAQCAYAAAAMJL+VAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAdJJREFUeNqMlEsohFEUxw3KeJQJsaAkC6WUyORRTBYkkYXnQmRDsTCKnYWwYadkQ1nIgq0kK49kgZVXzcosKEWNJG+f/6n/V8ftmubWr+537jnn/91z7z2euOjDQ3747QP5oARUgQrwBQ7ADtgHjhvsOI41aRLwgxFQw+//RjFYZ1JhDwRsArlgGKyAEHgAPSAhLrYxpEQ+QL8pkAeW6fANai1JSsEomCNVxvq0EvkE5WaJWljPoBGYChbBI+hgCSTyjWehSxtSIhtaIEDVK5CogrxgiwGjtEnZ7mhrNn5mVgmEXYEMcEPjpBEQpP0epNDWT9sZSDf825TArSswroyNyll2ck77Niigb5iXIcdyTgGV61AEJEm7coioeRbvvFvfTp5DHXdsG5lqvuZOHpVqgyEQoX3MkizNYpun/6VcDtlBPCbvyqFSzUX4iPM6ZU8GE5YDFnsXeAZ94MVd2FA7uDZebiHbgKzt8g+XwACINwSmeBPrzZfs54IrMmPpR+LTzRL6LKVpVfGrfLh/XnIveFVOIzG2CC/bhLSWU7DAa5xta3bVLIMrsgnKoiRP4tkMgiKbgwh4LHY56Cb2I3lcJ+AYXPB6PqnSOdG2JwK/AgwAwO+iG/PWSl8AAAAASUVORK5CYII=" /> Version: {app_version} {app_build}</span>
	<span><img style="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAEYSURBVBgZBcHPio5hGAfg6/2+R980k6wmJgsJ5U/ZOAqbSc2GnXOwUg7BESgLUeIQ1GSjLFnMwsKGGg1qxJRmPM97/1zXFAAAAEADdlfZzr26miup2svnelq7d2aYgt3rebl585wN6+K3I1/9fJe7O/uIePP2SypJkiRJ0vMhr55FLCA3zgIAOK9uQ4MS361ZOSX+OrTvkgINSjS/HIvhjxNNFGgQsbSmabohKDNoUGLohsls6BaiQIMSs2FYmnXdUsygQYmumy3Nhi6igwalDEOJEjPKP7CA2aFNK8Bkyy3fdNCg7r9/fW3jgpVJbDmy5+PB2IYp4MXFelQ7izPrhkPHB+P5/PjhD5gCgCenx+VR/dODEwD+A3T7nqbxwf1HAAAAAElFTkSuQmCC" /> {total_queries}</span>
	<span><img style="vertical-align:middle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAMESURBVDjLXZNrSFNxGMYPgQQRfYv6EgR9kCgKohtFgRAVQUHQh24GQReqhViWlVYbZJlZmZmombfVpJXTdHa3reM8uszmWpqnmQuX5drmLsdjenR7ev9DR3Xgd3h43+d5/pw/HA4AN9zITSPUhJ14R0xn87+h2ZzJvZVInJpzAQOXQOQMt+/5rvhMCLXv9Vjrt1rSXitmwj+Jua1+Ox+2HfGNdGf6yW8l5sUKPNVcRsiaPDA22Ahv6/7Ae/0aKdviQ0G7B/c6f8Zg+gbfh079Mjno0MhS58lflOsgEjh3BXc+bM/0DzbvDwj314znt/bjof0HdPw3FBq6kP+oCxVNfdDZvqPsrQmf6zdFRtyPJgbrFoqUTeS+FnPrekpmiC2lS+QcUx+qrf0wmFzodYfgC0nwhoYh9oegfdmLsmYXHj7JhV23erS7ZNYHyibGLiLtXsO19BoHSiwu6Ok09gwFg/gy8BO/STOkKFBk7EWh2YkLeh5Hy4Ws2B2w157iDvOpxw4UPRPRTSfL41FIsow7ZeXwUFF4dBQ1L96A/xLEFf1HMC/LxAt25PH+VN0HXH1gh2dEwdBoBGO0OKvW4L7hCdIvavBSsMIRVHCi0ArmZZl4wbYrz/yHSq1Ql9vQLylUEoE7GMal3OuxMG/7CO848N6n4HheK5iXZeIFmy88Nu+8aYJG24G3ziB+0Ee7wwqemlvQ5w9hcAJwyUDtpwBOFLeBeVkmXpB0qlK9RV2HlLsCsvUivHRhQwoQjhCkA1TgJX1OK0JVzIN5WSZesPZ44XKia+P5BqSS4aq+BzZXABLdhyQrsJPOqv4MVcEbMA/zsky8gLHyYO7hI9laecOZWuzLfYXU2zzSblmQerMZqjwTknOeY9dlIw5kVcrMG/8XpoQgCEkOhwNNJn5i7bFSrFDpsCrFEIPpLacr0WxpibYIQpS86/8pMBqNswnJ6XSivqHBv3R3pmbxzgwz4Z+EaTXtwqIogrzjxIJ4QVVV1UyihxgjFv3/K09Bu/lEkBgg5rLZH+fT5dvfn7iFAAAAAElFTkSuQmCC" /> {elapsed_time}</span>
	<span><img style="vertical-align:middle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJ3SURBVDjLpZNtSNNRFIcNKunF1rZWBMJqKaSiX9RP1dClsjldA42slW0q5oxZiuHrlqllLayoaJa2jbm1Lc3QUZpKFmmaTMsaRp+kMgjBheSmTL2//kqMBJlFHx44XM7vOfdyuH4A/P6HFQ9zo7cpa/mM6RvCrVDzaVDy6C5JJKv6rwSnIhlFd0R0Up/GwF2KWyl01CTSkM/dQoQRzAurCjRCGnRUUE2FaoSL0HExiYVzsQwcj6RNrSqo4W5Gh6Yc4+1qDDTkIy+GhYK4nTgdz0H2PrrHUJzs71NQn86enPn+CVN9GnzruoYR63mMPbkC59gQzDl7pt7rc9f7FNyUhPY6Bx9gwt4E9zszhWWpdg6ZcS8j3O7zCTuEpnXB+3MNZkUUZu0NmHE8XsL91oSWwiiEc3MeseLrN6woYCWa/Zl8ozyQ3w3Hl2lYy0SwlCUvsVi/Gv2JwITnYPDun2Hy6jYuEzAF1jUBCVYpO6kXo+NuGMeBAgcgfwNkvgBOPgUqXgKvP7rBFvRhE1crp8Vq1noFYSlacVyqGk0D86gbART9BDk9BFnPCNJbCY5aCFL1Cyhtp0RWAp74MsKSrkq9guHyvfMTtmLc1togpZoyqYmyNoITzVTYRJCiXYBIQ3CwFqi83o3JDhX6C0M8XsGIMoQ4OyuRlq1DdZcLkmbgGDX1iIEKNxAcbgTEOqC4ZRaJ6Ub86K7CYFEo8Qo+GBQlQyXBczLZpbloaQ9k1NUz/kD2myBBKxRZpa5hVcQslalatoUxizxAVVrN3CW21bFj9F858Q9dnIRmDyeuybM71uxmH9BNBB1q6zybV7H9s1Ue4PM3/gu/AEbfqfWy2twsAAAAAElFTkSuQmCC" /> {screen_name} [{group_title}]</span>
	<a href="{path=logout}">Logout</a>
	<a href="{cp_url}">Control Panel</a>
	<span>PHP <?php echo(phpversion()); ?></span>
</div>