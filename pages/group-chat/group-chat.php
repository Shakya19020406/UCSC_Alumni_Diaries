<link rel='stylesheet' href='../../assets/styles/group-chat-iframe-01.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<script>
    $(document).ready(() => {
        $('#chatList').load("../../server/group-chat/render-list.php");
        $('#filter').submit((event) =>{
          event.preventDefault();
          const group_name = $('#group-name').val();
          $('#chatList').load("../../server/group-chat/filter.php",{
              Group_Name : group_name 
          });
    
        });
    });
</script>

<script>
    const ViewChat = (id) => {
        $('#chat-wall').load("../../server/group-chat/group-chat-details.php", {
            Id: id        
        });
     
    }
    const DeleteChat= (id) => {
        $('#chatList').load("../../server/group-chat/delete.php", {
            Id: id       
        });    
    }
    const Edit = (id) =>{
        
        const Edit_Form = '#edit-form-'+id;
        const Form = 'edit-form-'+id;
        const submitFile = 'file-input-'+id;
        const message = 'message-'+id;
       
        $(Edit_Form).submit((event) => {
            event.preventDefault();
            
            const url = '../../server/group-chat/edit-group.php';
            const form = document.getElementById(Form);
            const files1 = document.getElementById(submitFile);
            const formData = new FormData(form);
            
            console.log(form);

            fetch(url, {
                method: 'POST',
                body: formData,
            }).then((response) => {
                console.log(response);
            }).catch((error) => {
                console.log(error);
            });
            
            setTimeout(() => {
                location.reload();
            }, 1000);
          
        });
       
    }
    const fiterAvailableUsers = (id) =>{
        $('#filter-available').submit((event) =>{
            event.preventDefault();
            const first_name = $('#first-name').val();
            const last_name = $('#last-name').val();
            const batch = $('#select-batch').val();
           $('#availableusers').load("../../server/group-chat/fiter-available-users.php",{
                Id: id,
                First_Name : first_name, 
                Last_Name : last_name,
                Batch : batch
            });
    
        });
        
   } 
    const onClickAddBtn = (id) =>{ 
        const group_id1 = $('#GroupId').val();
        $('#availableusers').load("../../server/group-chat/Add-user.php", {
        Id:id,
        GroupId:group_id1    
        });   
    }
    const OnclickRemove = (id) =>{ 
        const user_email = $('#User-Email').val();
        $('#group-participants').load("../../server/group-chat/delete-user.php", {
        Id2:id,
        UserEmail:user_email

        });  

   } 
    const fiterParticipants = (id) =>{ 
        $('#participants-filter').submit((event) =>{
            event.preventDefault();
            const participnts_firstname = $('#participants-firstName').val();
            const participnts_lastname = $('#participants-lastName').val();
            $('#group-participants').load("../../server/group-chat/filter-participants.php", {
                Id:id, 
                Participants_FirstName:participnts_firstname,
                Participants_LastName:participnts_lastname
            }); 
       
        }); 
       
    }
     </script>
    <script>    
    const chat = (id) =>{
     $('#chat-window-01').submit((event) =>{
            event.preventDefault();
            const fd = new FormData();
            const files = $('#file-btn')[0].files;
            const message = $('#message').val();
            const Id = $('#msgId').val();
            if(files.length > 0 || message.length > 0){
                fd.append('file-message',files[0]);
                fd.append('message',message);
                fd.append('msgId',Id);
                $.ajax({
                     url: '../../server/group-chat/sent-message.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false
                });
            }
            $('#message-list').load("../../server/group-chat/render-messages.php", {
            Id: id
            });   
            document.getElementById("message").value = "";
            document.getElementById("file-btn").value = ""; 
        });
        
    } 
    const onClickDeleteMsg = (data) =>{
            const Id = data.split(',')[0];
            const ChatId = data.split(',')[1];
            $('#message-list').load("../../server/group-chat/delete-message.php",{
                Id: Id,
                ChatId: ChatId
            });
        }
       
</script>  
<div class='group-chat-grid'>
    <div class='card chat-list'>
        <div class='title'>Chat List</div>
        <form class='filter' id='filter'>
            <div class='box-01'>
                <input class='input-field-01' id='group-name' type='text' placeholder='Group Name'/>
                <!-- <input class='input-field-01' type='text' placeholder='Last Name'/> -->
            </div>
            <div class='box-02'>
                <input type='submit' class='filter-btn btn' value='Filter'></input>
            </div>
        </form>
        <div class='chats' id='chatList'>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                     <button class='view-btn btn' id='view-btn' onclick=ViewChat()> View</button>
                    <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class='chat-wall' id='chat-wall'>
         <!-- <div class='row-01' id='row-01'> -->
            <!-- <div class='title project-name-div' id='project-name-div'> -->
               
                <!-- <i class='fas fa-edit icon-btn ' title='Edit Group' onclick='DisplayEditProjectNameDiv()'></i>
            </div>
            <div class='edit-project-name-div' id='edit-project-name-div'>
                <img src='../../assets/images/group-chat.png' width='8%' height='' class='user-pic' alt='user-pic'>
                <input type='text' placeholder='Enter new Group name' value=" Group Name"
                       class='new-project-name input-field' id='new-project-name'/>
                <button class='edit-btn btn'>Edit</button>
                <button class='cancel-btn btn' onclick='HideEditProjectNameDiv()'>Cancel</button>
            </div> -->
        <!-- </div> -->
        <!-- <div class='button-class' id='button-class'>
            <button class='participants-btn btn' id='participants-button' onclick='DisplayParticipantsList()' >Participants list</button>
            <button class='available-btn btn' id='available-button' onclick='DispalyAvailableUsers()'>Available users</button>   
        </div>  -->
        <!-- <div class='row-02' id='chat-window'>
            <div class='results3' id='message-list'>
        
            </div>
        </div>
        <form class='create-message-div' id='chat-window-01' method='post' enctype='multipart/form-data' action='../../server/group-chat/sent-message.php'>
            <textarea class='chat-message' id='message' name='message'></textarea>
             <div class='button-set'>
                 <label class='messge-sent'>
                   <input type='submit' name='submit-btn' id='submit-btn' class='messge-upload-btn btn' style='display:none'>
                  <i class='fas fa-paper-plane chat-icon send-icon'></i>
                 </label>
                 <label class='messge-sent'>
                   <input type='file' name='file-message' id='file-btn' class='messge-upload-btn btn' style='display:none'>
                   <i class='fas fa-paperclip chat-icon attach-icon'></i>
                 </label>
                 <label class='messge-sent'>
                   <input type='reset' name='submit-btn' id='cancel-message-btn' class='messge-upload-btn btn' style='display:none'>
                  <i class='fas fa-times-circle chat-icon clear-icon'></i>
                 </label>
             </div>
        </form>
        <div class= 'row-04' id='participants-list'> 
            <div class='title-02'>
                Participants
            </div>
            <form class='Participants-filter' id='participants-filter'>
                <div class='p_box-01'>
                    <input class='participants-field' type='text' placeholder='First Name' id='participants-firstName'/>
                    <input class='participants-field' type='text' placeholder='Last Name' id='participants-lastName'/>
                </div>
                <div class='box-02'>
                <input type='submit' value='Filter' class='filter-btn btn'></input>
                </div>
            </form>
            <div class='available-users-container' id='available-users-container'>
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
              <button class='chat-btn btn' onclick='DisplayChatWindow()'>View Chat</button>
            </div>   
        </div>
        <div class='available-users' id='available-users'>
            <div class='title'>Available Users</div>
            <form class='filter' id='filter-available'>
                <div class='box-01'>
                    <input class='input-field' type='text' placeholder='First Name'/>
                    <input class='input-field' type='text' placeholder='Last Name'/>
                    <select class='input-field' id='select-batch'>
                        <option value='' disabled selected hidden>All</option>
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
                <input type='submit' value='Filter' class='filter-btn btn' onclick='fiterAvailableUsers()'></input>
            </form>
            </div>
            <div class='available-users-container' id='available-list'>
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
              <button class='chat-btn btn' onclick='DisplayChat()'>View Chat</button>
            </div>                
        </div>    -->
    </div>
</div>
 <script src='../../js/group-project.js'></script>
 <script src='../../js/available-users.js'></script>
