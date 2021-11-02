<link rel='stylesheet' href='../../assets/styles/group-chat-iframe-01.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='group-chat-grid'>
    <div class='card chat-list'>
        <div class='title'>Chat List</div>
        <div class='filter'>
            <div class='box-01'>
                <input class='input-field-01' type='text' placeholder='First Name'/>
                <input class='input-field-01' type='text' placeholder='Last Name'/>
            </div>
            <div class='box-02'>
                <button class='filter-btn btn'>Filter</button>
            </div>
        </div>
        <div class='chats'>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                        <button class='view-btn btn'>View</button>
                        <button class='delete-btn btn'>Delete</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='chat-wall' id='chat-wall'>
        <div class='row-01'>
            <div class='title project-name-div' id='project-name-div'>
                Group Name
                <i class='fas fa-edit icon-btn ' title='Edit Group' onclick='DisplayEditProjectNameDiv()'></i>
            </div>
            <div class='edit-project-name-div' id='edit-project-name-div'>
                <img src='../../assets/images/user-default.png' width='10%' height='' class='user-pic' alt='user-pic'>
                <input type='text' placeholder='Enter new Group name' value=" Group Name"
                       class='new-project-name input-field' id='new-project-name'/>
                <button class='edit-btn btn'>Edit</button>
                <button class='cancel-btn btn' onclick='HideEditProjectNameDiv()'>Cancel</button>
            </div>
        </div>
        <div class='button-class' id='button-class'>
            <button class='participants-btn btn' id='participants-button' onclick='DisplayParticipantsList()' >Participants list</button>
            <button class='available-btn btn' id='available-button' onclick='DispalyAvailableUsers()'>Available users</button>   
        </div> 
        <div class='row-02' id='chat-window'>
            <div class='results3' id='message-list'>
                <div class='sent-message-line'>
                    <div class='sent-message'>
                        <div class='delete-msg-container'>
                            <i class='fas fa-times-circle delete-msg-icon'></i>
                        </div>
                        <div class='content'>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                            of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                            Latin
                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                            classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                            1.10.32
                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a
                            line in
                            section 1.10.32.
                        </div>
                        <div class='time'>
                            09:28
                        </div>
                    </div>
                </div>
                <div class='received-message-line'>
                    <div class='received-message'>
                        <div class='sender-name'>
                            Isuru
                        </div>
                        <div class='content'>
                            Hello Machan
                        </div>
                        <div class='time'>
                            09:28
                        </div>
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
                        <div class='time'>
                            09:28
                        </div>
                    </div>
                </div>
                <div class='received-message-line'>
                    <div class='received-message'>
                        <div class='sender-name'>
                            Isuru
                        </div>
                        <div class='content'>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                            of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                            Latin
                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                            classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                            1.10.32
                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a
                            line in
                            section 1.10.32.
                        </div>
                        <div class='time'>
                            09:28
                        </div>
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
                        <div class='time'>
                            09:28
                        </div>
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
                        <div class='time'>
                            09:28
                        </div>
                    </div>
                </div>
                <div class='received-message-line'>
                    <div class='received-message'>
                        <div class='sender-name'>
                            Isuru
                        </div>
                        <div class='content'>
                            Hello Machan
                        </div>
                        <div class='time'>
                            09:28
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class='create-message-div' id='chat-window-01'>
            <textarea class='chat-message'></textarea>
            <div class='button-set'>
                <i class='fas fa-paper-plane chat-icon send-icon'></i>
                <i class='fas fa-paperclip chat-icon attach-icon'></i>
                <i class='fas fa-times-circle chat-icon clear-icon'></i>
            </div>
        </div>
        <div class= 'row-04' id='participants-list'> 
            <div class='title-02'>
                Participants
            </div>
            <div class='Participants-filter'>
                <div class='p_box-01'>
                    <input class='participants-field' type='text' placeholder='First Name'/>
                    <input class='participants-field' type='text' placeholder='Last Name'/>
                </div>
                <div class='box-02'>
                    <button class='filter-btn btn'>Filter</button>
                </div>
            </div>
            <div class='available-users-container'>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="remove-btn btn">Remove</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="remove-btn btn">Remove</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="remove-btn btn">Remove</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="remove-btn btn">Remove</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="remove-btn btn">Remove</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="remove-btn btn">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class='chat-button'>
              <button class="chat-btn btn" onclick='HideChatWindow()'>View Chat</button>
            </div>   
        </div>
        <div class='available-users' id='available-users'>
            <div class='title'>Available Users</div>
            <div class='filter'>
                <div class='box-01'>
                    <input class='input-field' type='text' placeholder='First Name'/>
                    <input class='input-field' type='text' placeholder='Last Name'/>
                    <select class='input-field'>
                        <option value='All'>All</option>
                        <option value='2004/2005'>2004/2005</option>
                        <option value='2005/2006'>2005/2006</option>
                        <option value='2006/2007'>2006/2007</option>
                        <option value='2008/2009'>2008/2009</option>
                        <option value='2009/2010'>2009/2010</option>
                        <option value='2010/2011'>2010/2011</option>
                        <option value='2011/2012'>2011/2012</option>
                        <option value='2012/2013'>2012/2013</option>
                        <option value='2013/2014'>2013/2014</option>
                        <option value='2014/2015'>2014/2015</option>
                        <option value='2015/2016'>2015/2016</option>
                        <option value='2016/2017'>2016/2017</option>
                        <option value='2017/2018'>2017/2018</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2019/2020'>2019/2020</option>
                        <option value='2020/2021'>2020/2021</option>
                        <option value='2021/2022'>2021/2022</option>
                        <option value='2022/2023'>2022/2023</option>
                    </select>
                </div>
                <div class='box-02'>
                    <button class='filter-btn btn'>Filter</button>
                </div>
            </div>
            <div class='available-users-container'>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="add-btn btn">Add</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="add-btn btn">Add</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="add-btn btn">Add</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="add-btn btn">Add</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="add-btn btn">Add</button>
                        </div>
                    </div>
                </div>
                <div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width="12%" class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>First Name</div>
                            <div class='a-last-name'>Last Name</div>
                        </div>
                        <div class='btn-container03'>
                            <button class="add-btn btn">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class='chat-button'>
              <button class="chat-btn btn" onclick='HideChat()'>View Chat</button>
            </div>                
        </div>  
    </div>
</div>
<script src='../../js/group-project.js'></script>
<script src='available-user.js'></script>
