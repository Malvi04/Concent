<?PHP 
																		if($_SESSION['level']=="admin"){
							echo "<nav class='pcoded-navbar'>
                        <div class='pcoded-inner-navbar main-menu'>
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='dashboard.php'>
                                        <span class='pcoded-micon'><i class='icofont icofont-ui-home'></i></span>
                                        <span class='pcoded-mtext' >Home</span>
                                    </a>
                                </li>
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='form-tickets.php'>
                                        <span class='pcoded-micon'><i class='feather icon-file-plus'></i><b>A</b></span>
                                        <span class='pcoded-mtext' >Create Ticket</span>
                                    </a>
                                </li>
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='list-client.php'>
                                        <span class='pcoded-micon'><i class='feather icon-edit-1'></i><b>A</b></span>
                                        <span class='pcoded-mtext' >Frequently Link</span>
                                    </a>
                                </li>
                            </ul>
							
							
                           
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class='pcoded-hasmenu '>
                                    <a href='javascript:void(0)'>
                                        <span class='pcoded-micon'><i class='feather icon-layers'></i></span>
                                        <span class='pcoded-mtext'>Task List</span>
										<span class='pcoded-badge label label-danger'>4</span>
                                    </a>
                                    <ul class='pcoded-submenu'>
                                        <li class=''>
                                            <a href='ticket-list-my.php'>
                                                <span class='pcoded-mtext' >My Tickets</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='ticket-list.php'>
                                                <span class='pcoded-mtext' >Open</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='ticket-list-progress.php'>
                                                <span class='pcoded-mtext' >In Progress</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='ticket-list-closed.php'>
                                                <span class='pcoded-mtext' >Finished</span>
                                            </a>
                                        </li>
                                        </ul>
                                </li>
                                
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class='pcoded-hasmenu '>
                                    <a href='javascript:void(0)'>
                                        <span class='pcoded-micon'><i class='feather icon-book'></i></span>
                                        <span class='pcoded-mtext'>Report</span>
										<span class='pcoded-badge label label-danger'>2</span>
                                    </a>
                                    <ul class='pcoded-submenu'>
                                        <li class=''>
                                            <a href='report-summary.php'>
                                                <span class='pcoded-mtext' >Summary</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='report-history-tickets.php'>
                                                <span class='pcoded-mtext' >History</span>
                                            </a>
                                        </li>
										</ul>
                                </li>
                                
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='#'>
                                        <span class='pcoded-micon'><i class='feather icon-edit-1'></i><b>A</b></span>
                                        <span class='pcoded-mtext' >FAQ</span>
                                    </a>
                                </li>
                            </ul>
							
							
                        </div>
                    </nav>
                    </nav>";
							} 
							else{
							echo "<nav class='pcoded-navbar'>
                        <div class='pcoded-inner-navbar main-menu'>
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='dashboard.php'>
                                        <span class='pcoded-micon'><i class='icofont icofont-ui-home'></i></span>
                                        <span class='pcoded-mtext' >Home</span>
                                    </a>
                                </li>
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='form-tickets.php'>
                                        <span class='pcoded-micon'><i class='feather icon-file-plus'></i><b>A</b></span>
                                        <span class='pcoded-mtext' >Create Ticket</span>
                                    </a>
                                </li>
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='list-client.php'>
                                        <span class='pcoded-micon'><i class='feather icon-edit-1'></i><b>A</b></span>
                                        <span class='pcoded-mtext' >Frequently Link</span>
                                    </a>
                                </li>
                            </ul>
							
							
                           
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class='pcoded-hasmenu '>
                                    <a href='javascript:void(0)'>
                                        <span class='pcoded-micon'><i class='feather icon-layers'></i></span>
                                        <span class='pcoded-mtext'>Task List</span>
										<span class='pcoded-badge label label-danger'>4</span>
                                    </a>
                                    <ul class='pcoded-submenu'>
                                        <li class=''>
                                            <a href='ticket-list-my.php'>
                                                <span class='pcoded-mtext' >My Tickets</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='ticket-list.php'>
                                                <span class='pcoded-mtext' >Open</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='ticket-list-progress.php'>
                                                <span class='pcoded-mtext' >In Progress</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='ticket-list-closed.php'>
                                                <span class='pcoded-mtext' >Finished</span>
                                            </a>
                                        </li>
                                        </ul>
                                </li>
                                
                            </ul>
							
							
							
						
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class='pcoded-hasmenu '>
                                    <a href='javascript:void(0)'>
                                        <span class='pcoded-micon'><i class='feather icon-sliders'></i></span>
                                        <span class='pcoded-mtext'>Maintenance</span>
										<span class='pcoded-badge label label-danger'>4</span>
                                    </a>
                                    <ul class='pcoded-submenu'>
                                        <li class=''>
                                            <a href='list-user.php'>
                                                <span class='pcoded-mtext' >User</span>
                                            </a>
                                        </li>
										
										<li class=''>
                                            <a href='list-client.php'>
                                                <span class='pcoded-mtext' >Client</span>
                                            </a>
                                        </li>
										
										<li class=''>
                                            <a href='list-pic.php'>
                                                <span class='pcoded-mtext' >Ticket PIC</span>
                                            </a>
                                        </li>
										
										<li class=''>
                                            <a href='#'>
                                                <span class='pcoded-mtext' >FAQ</span>
                                            </a>
                                        </li>
										
                                        </ul>
                                </li>
                                
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class='pcoded-hasmenu '>
                                    <a href='javascript:void(0)'>
                                        <span class='pcoded-micon'><i class='feather icon-book'></i></span>
                                        <span class='pcoded-mtext'>Report</span>
										<span class='pcoded-badge label label-danger'>2</span>
                                    </a>
                                    <ul class='pcoded-submenu'>
                                        <li class=''>
                                            <a href='report-summary.php'>
                                                <span class='pcoded-mtext' >Summary</span>
                                            </a>
                                        </li>
										<li class=''>
                                            <a href='report-history-tickets.php'>
                                                <span class='pcoded-mtext' >History</span>
                                            </a>
                                        </li>
										</ul>
                                </li>
                                
                            </ul>
							
							<ul class='pcoded-item pcoded-left-item'>
                                <li class=' '>
                                    <a href='#'>
                                        <span class='pcoded-micon'><i class='feather icon-edit-1'></i><b>A</b></span>
                                        <span class='pcoded-mtext' >FAQ</span>
                                    </a>
                                </li>
                            </ul>
							
                        </div>
                    </nav>
                    </nav>";	
						}?>
						
						
						