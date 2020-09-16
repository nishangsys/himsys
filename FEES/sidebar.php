
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>


.navigation {
  padding: 0;
  margin: 0;
  border: 0;
  line-height: 1;

  
}
body{
	font-family:Arial, Helvetica, sans-serif;
	line-height:normal;
	font-size:13px;
}
form,table{
	line-height:1.5;
}
.navigation ul,
.navigation ul li,
.navigation ul ul {
  list-style: none;
  margin: 0;
  padding: 0;
  background:#000;
}

.navigation ul {
  position: relative;
  z-index: 500;
  float: left;
}

.navigation ul li {
  float: left;
  min-height: 0.05em;
  line-height: 1em;
  vertical-align: middle;
 
  
}

.navigation ul li.hover,
.navigation ul li:hover {
  position: relative;
  z-index: 510;
  cursor: default;
}

.navigation ul ul {
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0px;
  z-index: 520;
  width: 100%;
}

.navigation ul ul li { float: none; }

.navigation ul ul ul {
  top: 0;
  right: 0;
}

.navigation ul li:hover > ul { visibility: visible; }

.navigation ul ul {
  top: 0;
  left: 99%;
}

.navigation ul li { float: none; }

.navigation ul ul { margin-top: 0.05em; }

.navigation {
  width: 15em;
  background: #000;
  font-family: 'roboto', Tahoma, Arial, sans-serif;
  zoom: 1;
}

.navigation:before {
  content: '';
  display: block;
}

.navigation:after {
  content: '';
  display: table;
  clear: both;
}

.navigation a {
  display: block;
  padding: 1em 2em;
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase;
}

.navigation > ul { width: 18em; }

.navigation ul ul { width: 15em; }

.navigation > ul > li > a {
  border-right:0;
  color: #ffffff;
}

.navigation > ul > li > a:hover { color: #ffffff; }

.navigation > ul > li a:hover,
.navigation > ul > li:hover a { background: #34A65F; }

.navigation li { position: relative; }

.navigation ul li.has-sub > a:after {
  content: '»';
  position: absolute;
  right: 1em;
}

.navigation ul ul li.first {
  -webkit-border-radius: 0 3px 0 0;
  -moz-border-radius: 0 3px 0 0;
  border-radius: 0 3px 0 0;
}

.navigation ul ul li.last {
  -webkit-border-radius: 0 0 3px 0;
  -moz-border-radius: 0 0 3px 0;
  border-radius: 0 0 3px 0;
  border-bottom: 0;
}

.navigation ul ul {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}

.navigation ul ul { border: 1px solid #34A65F; }

.navigation ul ul a { color: #ffffff; }

.navigation ul ul a:hover { color: #ffffff; }

.navigation ul ul li { border-bottom: 1px solid #0F8A5F; }

.navigation ul ul li:hover > a {
  background: #4eb1ff;
  color: #ffffff;
}

.navigation.align-right > ul > li > a {
  border-left: 0;
  border-right: none;
}

.navigation.align-right { float: right; }

.navigation.align-right li { text-align: right; }

.navigation.align-right ul li.has-sub > a:before {
  content: '+';
  position: absolute;
  top: 50%;
  left: 15px;
  margin-top: -6px;
}

.navigation.align-right ul li.has-sub > a:after { content: none; }

.navigation.align-right ul ul {
  visibility: hidden;
  position: absolute;
  top: 0;
  left: -100%;
  z-index: 598;
  width: 100%;
}

.navigation.align-right ul ul li.first {
  -webkit-border-radius: 3px 0 0 0;
  -moz-border-radius: 3px 0 0 0;
  border-radius: 3px 0 0 0;
}

.navigation.align-right ul ul li.last {
  -webkit-border-radius: 0 0 0 3px;
  -moz-border-radius: 0 0 0 3px;
  border-radius: 0 0 0 3px;
}

.navigation.align-right ul ul {
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.active{
	background:#0C3;
	color:#00F;
	font-family:"Arial Black", Gadget, sans-serif;
}
</style>
</head>


<div class="navigation"  >
  <ul>
              <li style="background:#F00"><a href="../Cash/index.php">OTHER INCOME/ EXPENSE</a></li>


   
<li class="has-sub"> <a href="#">Statistics </a>
      <ul>
    <li ><a href="?c_list">Class Lists </a></li>



        <li><a href="?statss">Enrollment</a></li>
        
        <li><a href="?stats">Fee Statistics</a></li>
        <li><a href="?genc_lists&link=Import Names">General Lists</a></li>
          

      </ul>
    </li>
 

    <li class="has-sub"> <a href="#">Admission Center</a>
      <ul>
        <li > <a href="?ffirst&link=New%20Students%20Payments">HND/MBA/B.TEC</a>
        </li>
        <li><a href="?otherss&link=New%20Students%20Payments">I.C.E.L.P/ ICAN</a></li>
        
        <li><a href="?direct_entry&link=Direct Entry">Direct Entry</a></li>
        
        <li><a href="?scholarship&link=Our Students On scholarship">Scholarship</a></li>
         <li ><a href="?move&link=Our Students On scholarship" style="background:#F00">Move Student</a></li>
        
          <li><a href="?otherst&link=Our Students On scholarship">Add Missing Name</a></li>
          
          <li><a href="?import_names&link=Import Names">Import Names</a></li>
          
            <li><a href="?lasts&link=Import Names">Last Admissions</a></li>
          
          
      </ul>
    </li>
    <li class="has-sub"> <a href="#">Payments Center</a>
      <ul>
       <li><a href="?regs">Registration Fee</a></li>

        <li><a href="?fb&link= First Block/ Registration Fees Payments">Receive Fees</a></li>
        
        <li><a href="?waiver">Waiver</a></li>

      </ul>
    </li>
    <li class="has-sub"> <a href="#">Update Center</a>
      <ul>
        <li><a href="?update">Finance Update</a></li>
        <li><a href="?updatem">Name / Matricule</a></li>
      </ul>
    </li>
    
     <li class="has-sub"> <a href="#">Scholarships</a>
      <ul>
        <li><a href="?scholars&link=Scholarship Providers">Add Providers</a></li>
        <li><a href="?scholarship=Our Students On scholarship">New Case</a></li>
             <li><a href="?scholarship&link=Mid Term">Mid Term </a></li>
               <li><a href="?all_scholars&link=Scholarship Reports">Scholars' Reports</a></li>
  


      </ul>
    </li>
    
      
     <li class="has-sub"> <a href="#">Fees Report</a>
      <ul>
        <li><a href="?completed_fees">Completed Fees</a></li>
        <li><a href="?uncompleted_fees">Uncompleted Fees</a></li>
     <li><a href="?frecords">Departmental</a></li>
          <li><a href="?fee_drive">Fee Drive</a></li>
  <li><a href="?stats">Fee Statistics</a></li>

    </ul>
    </li>
    
   
     <li class="has-sub"> <a href="#">Other Reports Center</a>
      <ul>
               <li><a href="?todays">Todays Report</a></li>

        <li><a href="?reg_receipts">Registration Fees</a></li>
        <li><a href="?reg_receipts">Student Union</a></li>
     <li><a href="?frecords">Waiver Reports</a></li>
          <li><a href="?reg_receipts">	T-shirts</a></li>


    </ul>
    </li> 
    
    
    
    
     <li class="has-sub"> <a href="#">Debtors Center</a>
      <ul>
        <li><a href="?debtors">Add Debtors</a></li>
        <li><a href="?all_debtors">All Debtors</a></li>
     <li><a href="?transfer">Reconcile Debts</a></li>
          <li><a href="?recovered">Reconciled Debts Reports</a></li>


      </ul>
    </li>
    
    
     <li class="has-sub" style="background:#a67c00" > <a href="#">Receipts Center</a>
      <ul>
              <li><a href="?receipts">Individual Receipts</a></li>


      </ul>
    </li>
    

    
  
    
  </ul>
  
    
    
</div>
