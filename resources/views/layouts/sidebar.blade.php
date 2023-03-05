<aside id="sidebar-wrapper">
   <div class="sidebar-brand">
       <a href="index.html">QA SYSTEM</a>
   </div>
   <div class="sidebar-brand sidebar-brand-sm">
       <a href="index.html">St</a>
   </div>
   <ul class="sidebar-menu">
       @section('sidebar')
           {{-- dashboard --}}
           <li class="menu-header">Dashboard</li>
           <li class="nav-item dropdown">
               <a href="#" class="nav-link has-dropdown"><i
                       class="fas fa-fire"></i><span>Dashboard</span></a>
               <ul class="dropdown-menu">
                   <li>
                       <a class="nav-link" href="index.html">Jira Integration</a>
                   </li>
                   <li>
                     <a class="nav-link" href="index.html">Create test cases</a>
                 </li>
                  <li>
                     <a class="nav-link" href="index.html">Create a test run</a>
                  </li>
               </ul>
           </li>
           {{-- manage menu --}}
           <li class="menu-header">Work</li>

           <li class="nav-item ">
               <a href="#" class="nav-link "><i
                       class="fas fa-users"></i><span>Test Cases</span></a>
           </li>
           <li class="nav-item ">
            <a href="#" class="nav-link "><i
                        class="fas fa-users"></i><span>Test Plans</span></a>
            </li>
            <li class="nav-item ">
               <a href="#" class="nav-link "><i
                       class="fas fa-users"></i><span>Test Runs</span></a>
               </li>
           @show



   </div>
</aside>