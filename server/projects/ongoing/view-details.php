<?php
    
    include('../../session.php');
    include('../../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    
    $query = "SELECT * FROM projects WHERE Id='{$Id}'";
    $query2 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$Id}' AND Email='{$_SESSION['Email']}' AND Type='Member'
    ";
    $query3 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$Id}' AND Email='{$_SESSION['Email']}' AND Type='Coordinator'
    ";
    
    $results = mysqli_query($conn, $query);
    $results2 = mysqli_query($conn, $query2);
    $results3 = mysqli_query($conn, $query3);
    
    $isCommitteeMember = mysqli_num_rows($results2) > 0;
    $isCoordinator = mysqli_num_rows($results3) > 0;
    $isTBMember = $_SESSION['AccType'] == "TopBoard";
    
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div class='row-1'>
                <div class='link clicked' id='link-1' onclick=ClickLink1('link-1')>Details</div>
                <div class='link clicked' id='link-2' onclick=ClickLink1('link-2')>Committee</div>
        ";
        
        if ($isCommitteeMember || $isCoordinator) {
            echo "
                <div class='link clicked' id='link-3' onclick=ClickLink1('link-3')>Chat</div>
            ";
        } else {
            echo "
                <div class='link clicked' id='link-3' style='display: none' onclick=ClickLink1('link-3')>Chat</div>
            ";
        }
        
        if ($isCommitteeMember || $isCoordinator || $isTBMember) {
            echo "
                <div class='link clicked' id='link-4' onclick=ClickLink1('link-4')>Assets</div>
            ";
        } else {
            echo "
                <div class='link clicked' id='link-4' style='display: none' onclick=ClickLink1('link-4')>Assets</div>
            ";
        }
    
        if ($isTBMember) {
            echo "
                <div class='link clicked' id='link-5' onclick=ClickLink1('link-5')>Actions</div>
            ";
        } else {
            echo "
                <div class='link clicked' id='link-5' style='display: none' onclick=ClickLink1('link-5')>Actions</div>
            ";
        }
        
        echo "
            </div>
            <div name='ongoing-projects-iframe' class='row-2' id='row-2'>
                <div class='details' id='details'>
                    <div class='row-a'>
                        <div class='set'>
                            <label for='p-id' class='label'>Project Id</label>
                            <div id='p-id' class='data'>
                                <p>{$row['Id']}</p>
                            </div>
                        </div>
                        <div class='set'>
                            <label for='p-start' class='label'>Started on</label>
                            <div id='p-start' class='data'>
                                <p>{$row['Timestamp']}</p>
                            </div>
                        </div>
                    </div>
                    <div class='set-2'>
                        <label for='p-name' class='label'>Project Name</label>
                        <div id='p-name' class='data-2'>
                            <p>{$row['Name']}</p>
                        </div>
                    </div>
                    <div class='set-3'>
                        <label for='p-description' class='label'>Project Description</label>
                        <div id='p-description' class='data-3'>
                            <p>{$row['Description']}</p>
                        </div>
                    </div>
                </div>
                <div class='card-commitee project-committee' id='committee-members'>
                    <div class='title'>Coordinator</div>
                    <div class='coord'>
                        <img src='../assets/images/user-default.png' height='100%' alt='user'/>
                        <div>First Name</div>
                        <div>Last Name</div>
                    </div>
                    <div class='title'>Members</div>
                    <div class='results'>
                        <div class='result2'>
                            <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                            <div class='fname'>First Name</div>
                            <div class='lname'>Last Name</div>
                        </div>
                        <div class='result2'>
                            <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                            <div class='fname'>First Name</div>
                            <div class='lname'>Last Name</div>
                        </div>
                        <div class='result2'>
                            <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                            <div class='fname'>First Name</div>
                            <div class='lname'>Last Name</div>
                        </div>
                    </div>
                </div>
                <div class='card-chat committee-chat' id='committee-chat'>
                    <div class='results3' id='message-list'>
                        <div class='sent-message-line'>
                            <div class='sent-message'>
                                <div class='delete-msg-container'>
                                    <i class='fas fa-times-circle delete-msg-icon'></i>
                                </div>
                                <div class='content'>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                                    classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                                    and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero,
                                    written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                                    Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in
                                    section 1.10.32.
                                </div>
                                <div class='time'>09:28</div>
                            </div>
                        </div>
                        <div class='received-message-line'>
                            <div class='received-message'>
                                <div class='sender-name'>Isuru</div>
                                <div class='content'>
                                    Hello Machan
                                </div>
                                <div class='time'>09:28</div>
                            </div>
                        </div>
                        <div class='sent-message-line'>
                            <div class='sent-message'>
                                <div class='delete-msg-container'>
                                    <i class='fas fa-times-circle delete-msg-icon'></i>
                                </div>
                                <div class='content'>
                                    Hello Machan
                                </div>
                                <div class='time'>09:28</div>
                            </div>
                        </div>
                        <div class='received-message-line'>
                            <div class='received-message'>
                                <div class='sender-name'>Isuru</div>
                                <div class='content'>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                                    classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                                    and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero,
                                    written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                                    Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in
                                    section 1.10.32.
                                </div>
                                <div class='time'>09:28</div>
                            </div>
                        </div>
                        <div class='sent-message-line'>
                            <div class='sent-message'>
                                <div class='delete-msg-container'>
                                    <i class='fas fa-times-circle delete-msg-icon'></i>
                                </div>
                                <div class='content'>
                                    Hello Machan
                                </div>
                                <div class='time'>09:28</div>
                            </div>
                        </div>
                        <div class='sent-message-line'>
                            <div class='sent-message'>
                                <div class='delete-msg-container'>
                                    <i class='fas fa-times-circle delete-msg-icon'></i>
                                </div>
                                <div class='content'>
                                    Hello Machan
                                </div>
                                <div class='time'>09:28</div>
                            </div>
                        </div>
                        <div class='received-message-line'>
                            <div class='received-message'>
                                <div class='sender-name'>Isuru</div>
                                <div class='content'>
                                    Hello Machan
                                </div>
                                <div class='time'>09:28</div>
                            </div>
                        </div>
                    </div>
                    <div class='create-message-div'>
                        <textarea class='chat-message'></textarea>
                        <div class='button-set'>
                            <i class='fas fa-paper-plane chat-icon send-icon'></i>
                            <i class='fas fa-paperclip chat-icon attach-icon'></i>
                            <i class='fas fa-times-circle chat-icon clear-icon'></i>
                        </div>
                    </div>
                </div>
                <div class='assets' id='assets'>
                    <div class='container-1'>
                        <div
                            id='l-1'
                            href='./projects/ongoing/assets/cash.php'
                            class='iframe-link left clicked-link'
                            onclick=VisitLinkNav('l-1')
                        >Cash</div>
                        <div
                            id='l-2'
                            href='./projects/ongoing/assets/items.php'
                            class='iframe-link right'
                            onclick=VisitLinkNav('l-2')
                        >Items</div>
                    </div>
                    <div class='container-2' name='iframe'>
                        <div class='cash-cash' id='project-cash'>
                            <div class='cash-sec-1'>
                                <div
                                    id='l-1-1'
                                    class='cash-iframe-link left cash-clicked-link'
                                    onclick=VisitLink('l-1-1')
                                >Summary</div>
                                <div
                                    id='l-2-1'
                                    class='cash-iframe-link'
                                    onclick=VisitLink('l-2-1')
                                >Spend</div>
                                <div
                                    id='l-3-1'
                                    class='cash-iframe-link'
                                    onclick=VisitLink('l-3-1')
                                >Approvals</div>
                                <div
                                    id='l-4-1'
                                    class='cash-iframe-link'
                                    onclick=VisitLink('l-4-1')
                                >Spent Records</div>
                            </div>
                            <div class='cash-sec-2' src='./cash/available.php'>
                                <div class='available-available' id='cash-summary'>
                                    <div class='available-card-1'>
                                        <div class='available-card-title'>Available Cash</div>
                                        <div class='available-value'>Rs. 10000.00</div>
                                    </div>
                                    <div class='available-card-2'>
                                        <div class='available-card-title'>Spent Cash</div>
                                        <div class='available-value'>Rs. 10000.00</div>
                                    </div>
                                    <div class='available-card-3'>
                                        <button class='available-btn available-filter-btn'>Generate Report</button>
                                    </div>
                                </div>
                                <form class='spend-spend' id='cash-spend'>
                                    <div class='spend-group'>
                                        <label for='amount'>Amount (Rs.)</label>
                                        <input id='amount' type='text' class='spend-input-field'/>
                                    </div>
                                    <div class='spend-group'>
                                        <label for='description'>Description</label>
                                        <input id='description' type='text' class='spend-input-field'/>
                                    </div>
                                    <div class='spend-group'>
                                        <label for='quotation'>Quotation attachment</label>
                                        <br />
                                        <input id='quotation' type='file' class='spend-bill-input'/>
                                    </div>
                                    <div class='spend-group'>
                                        <input
                                            type='submit'
                                            class='spend-spend-btn spend-button'
                                            value='Create spend request'
                                        />
                                    </div>
                                    <div class='spend-notice'>
                                        * Check the status of the spend request under the <b>Approvals</b> tab.
                                    </div>
                                </form>
                                <table id='cash-approvals'>
                                    <tr>
                                        <th class='spend-approvals-h-1'>Amount (Rs.)</th>
                                        <th class='spend-approvals-h-2'>Description</th>
                                        <th class='spend-approvals-h-3'>Quotation</th>
                                        <th class='spend-approvals-h-4'>Status</th>
                                        <th class='spend-approvals-h-5'>Timestamp</th>
                                    </tr>
                                    <tr>
                                        <td>600000</td>
                                        <td>i3 8GB Dell Laptop * 4</td>
                                        <td>Download</td>
                                        <td>Approved</td>
                                        <td>2021-10-08</td>
                                    </tr>
                                </table>
                                <div class='spent-records-spent-records' id='cash-spent-records'>
                                    <div class='spent-records-card-3'>
                                        <button
                                            class='spent-records-btn spent-records-filter-btn'
                                        >Generate Report</button>
                                    </div>
                                    <table>
                                        <tr class='spent-records-headings'>
                                            <th class='spent-records-h-1'>Amount (Rs.)</th>
                                            <th class='spent-records-h-2'>Description</th>
                                            <th class='spent-records-h-3'>Bill</th>
                                            <th class='spent-records-h-5'>Timestamp</th>
                                        </tr>
                                        <tr>
                                            <td>600000</td>
                                            <td>i3 8GB Dell Laptop * 4</td>
                                            <td>Download</td>
                                            <td>2021-10-08</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class='item-outer-container' id='project-item'>
                            <div class='items-items'>
                                <div class='items-sec-1'>
                                    <div
                                        id='l-1-2'
                                        href='./items/available.php'
                                        class='items-iframe-link left items-clicked-link'
                                        onclick=VisitLinkItem('l-1-2')
                                    >Summary</div>
                                    <div
                                        id='l-2-2'
                                        href='./items/spend.php'
                                        class='items-iframe-link'
                                        onclick=VisitLinkItem('l-2-2')
                                    >Spend</div>
                                    <div
                                        id='l-3-2'
                                        href='./items/spend-approvals.php'
                                        class='items-iframe-link'
                                        onclick=VisitLinkItem('l-3-2')
                                    >Approvals</div>
                                    <div
                                        id='l-4-2'
                                        href='./items/spent-records.php'
                                        class='items-iframe-link'
                                        onclick=VisitLinkItem('l-4-2')
                                    >Spent Records</div>
                                </div>
                                <div name='iframe-2' class='items-sec-2'>
                                    <div class='item-available-available' id='items-available'>
                                        <div class='item-available-card-3'>
                                            <button
                                                class='item-available-btn item-available-filter-btn'
                                            >Generate Report</button>
                                        </div>
                                        <table>
                                            <tr class='headings'>
                                                <th class='item-available-h-1'>Item Id</th>
                                                <th class='item-available-h-2'>Item Name</th>
                                                <th class='item-available-h-1'>Available Qty.</th>
                                                <th class='item-available-h-5'>Spent Qty.</th>
                                            </tr>
                                            <tr>
                                                <td>127</td>
                                                <td>Dell Laptop</td>
                                                <td>3</td>
                                                <td>5</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <form class='item-spend-spend' id='items-spend'>
                                        <div class='item-spend-parent-group'>
                                            <div class='item-spend-group item-spend-first'>
                                                <label for='id'>Item Id</label>
                                                <select id='id' class='item-spend-input-field'>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                </select>
                                            </div>
                                            <div class='item-spend-group item-spend-middle'>
                                                <label for='name'>Item Name</label>
                                                <input id='name' type='text' class='item-spend-input-field' disabled/>
                                            </div>
                                            <div class='item-spend-group item-spend-last'>
                                                <label for='available'>Available Quantity</label>
                                                <input
                                                    id='available'
                                                    type='text'
                                                    class='item-spend-input-field'
                                                    disabled
                                                />
                                            </div>
                                        </div>
                                        <div class='item-spend-parent-group'>
                                            <div class='item-spend-group item-spend-first'>
                                                <label for='spend'>Spend Quantity</label>
                                                <input id='spend' type='text' class='item-spend-input-field'/>
                                            </div>
                                            <div class='item-spend-group item-spend-last-2'>
                                                <label for='description'>Description</label>
                                                <input id='description' type='text' class='item-spend-input-field'/>
                                            </div>
                                        </div>
                                        <div class='item-spend-group'>
                                            <label for='quotation'>Quotation attachment</label>
                                            <br />
                                            <input id='quotation' type='file' class='item-spend-bill-input'/>
                                        </div>
                                        <div class='item-spend-group'>
                                            <input
                                                type='submit'
                                                class='item-spend-spend-btn item-spend-button'
                                                value='Create spend request'
                                            />
                                        </div>
                                        <div class='item-spend-notice'>
                                            * Check the status of the spend request under the <b>Approvals</b> tab.
                                        </div>
                                    </form>
                                    <table id='item-spend-approval'>
                                        <tr>
                                            <th class='item-approval-h-1'>Id</th>
                                            <th class='item-approval-h-1'>Name</th>
                                            <th class='item-approval-h-1'>Qty</th>
                                            <th class='item-approval-h-2'>Description</th>
                                            <th class='item-approval-h-1'>Quotation</th>
                                            <th class='item-approval-h-4'>Status</th>
                                            <th class='item-approval-h-5'>Timestamp</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dell Laptop</td>
                                            <td>3</td>
                                            <td>Dell laptops for distribution</td>
                                            <td>Download</td>
                                            <td>Approved</td>
                                            <td>2021-10-08</td>
                                        </tr>
                                    </table>
                                    <div class='item-record-spent-records' id='item-spent-record'>
                                        <div class='item-record-card-3'>
                                            <button
                                                class='item-record-btn item-record-filter-btn'
                                            >Generate Report</button>
                                        </div>
                                        <table>
                                            <tr class='headings'>
                                                <th class='item-record-h-1'>Id</th>
                                                <th class='item-record-h-1'>Name</th>
                                                <th class='item-record-h-1'>Qty</th>
                                                <th class='item-record-h-2'>Description</th>
                                                <th class='item-record-h-1'>Quotation</th>
                                                <th class='item-record-h-5'>Timestamp</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Dell Laptop</td>
                                                <td>3</td>
                                                <td>Dell laptops for distribution</td>
                                                <td>Download</td>
                                                <td>2021-10-08</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='actions' id='action'>
                    <div class='message'>Complete the project by achieving project goals.</div>
                    <button class='button create-btn'>Complete Project</button>
                    <br /><br /><br />
                    <div class='message'>Close the project without achieving project goals.</div>
                    <button class='button cancel-btn'>Close Project</button>
                </div>
            </div>
        ";
    }