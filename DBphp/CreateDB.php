<?php
include("Disconnect.php");

////////////////////
//                //
// Create Tables  //
//     & PKs      //
//                //
////////////////////
function CreateCommentsTable(){
		include("bdc.php");

	  $sql = "create table comments (
    id                int not null,
    content           varchar(256),
    users_id          int,
    publications_id   int
    );";

	  //On a successfull insert
	  if ($conn->query($sql) === TRUE) {
	    echo "Table \"Contents\" Created Successfully";

	    $sql = "alter table comments add constraint comments_pk primary key (id);";
		   if ($conn->query($sql) === TRUE) {
		    echo "Table \"Contents\" Primary Key Created Successfully";
		  } 
		  //On a failed insert
		  else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		  }
	  } 
	  //On a failed insert
	  else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	  Disconnect($conn);
}

function CreateProfileSharedPubsTable(){
    include("bdc.php");

    $sql = "create table profile_shared_pubs (
    users_id          int ,
    publications_id   int 
    );";

    if ($conn->query($sql) === TRUE) {
        echo "Table \"profile_shared_pubs\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }
    Disconnect($conn);
}

function CreatePublicationsTable(){
    include("bdc.php");

    $sql = "create table publications (
    id         int ,
    title      varchar(50),
    content    varchar(256),
    rooms_id   int ,
    users_id   int 
    );";
    
     if ($conn->query($sql) === TRUE) {
        echo "Table \"publications\" Created Successfully";

        $sql = "alter table publications add constraint publications_pk primary key ( id );";

         if ($conn->query($sql) === TRUE) {
        echo "Table \"publications\" Primary Key Created Successfully";
        }
        else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }
    Disconnect($conn);
}

function CreateRepliesTable(){
    include("bdc.php");

    $sql = "create table replies (
    id            int ,
    content       varchar(256),
    users_id      int ,
    comments_id   int 
    );";

    if ($conn->query($sql) === TRUE) {
        echo "Table \"replies\" Created Successfully";

        $sql = "alter table replies add constraint replies_pk primary key ( id );";

        if ($conn->query($sql) === TRUE) {
            echo "Table \"replies\" Primary Key Created Successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }
    Disconnect($conn);
}

function CreateRoomsTable(){
    include("bdc.php");

    $sql = "create table rooms (
    id         int ,
    title      varchar(50),
    users_id   int 
    );";

     if ($conn->query($sql) === TRUE) {
        echo "Table \"rooms\" Created Successfully";

        $sql = "alter table rooms add constraint rooms_pk primary key ( id );";

        if ($conn->query($sql) === TRUE) {
            echo "Table \"rooms\" Primary Key Created Successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }

    Disconnect($conn);
}

function CreateUserBiosTable(){
    include("bdc.php");

    $sql = "create table user_bios (
    content    varchar(255),
    users_id   int 
    );";

     if ($conn->query($sql) === TRUE) {
        echo "Table \"user_bios\" Created Successfully";

        $sql = "create unique index user_bios__idx on
                user_bios (
                users_id
                asc );";

        if ($conn->query($sql) === TRUE) {
            echo "Table \"user_bios\" Unique Index Created Successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }

    Disconnect($conn);
}

function CreateUsersTable(){
    include("bdc.php");

    $sql = "create table users (
    id         int ,
    username   varchar(50),
    password   varchar(50),
    email      varchar(50)
    );";

     if ($conn->query($sql) === TRUE) {
        echo "Table \"users\" Created Successfully";

        $sql = "alter table users add constraint users_pk primary key ( id );";

        if ($conn->query($sql) === TRUE) {
            echo "Table \"users\" Primary Key Created Successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }

    Disconnect($conn);
}

//////////////////////
//                  //
// ADD FOREIGH KEYS //
//                  //
//////////////////////


function CommentsTableFKs(){
    include("bdc.php");

    $sql = "alter table comments
    add constraint comments_publications_fk foreign key ( publications_id )
    references publications ( id );";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"comments\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }

    $sql = "alter table comments
    add constraint comments_users_fk foreign key ( users_id )
    references users ( id );";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"comments\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    Disconnect($conn);
}

function ProfileSharedPubsTableFKs(){
    include("bdc.php");

    $sql = "alter table profile_shared_pubs
    add constraint profile_pubs_publications_fk foreign key ( publications_id )
    references publications ( id );";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"profile_shared_pubs\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "alter table profile_shared_pubs
    add constraint profile_shared_pubs_users_fk foreign key ( users_id )
    references users ( id );
    ";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"profile_shared_pubs\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    Disconnect($conn);
}

function PublicationsTableFKs(){
    include("bdc.php");

    $sql = "alter table publications
    add constraint publications_rooms_fk foreign key ( rooms_id )
    references rooms ( id );";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"publications\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "alter table publications
    add constraint publications_users_fk foreign key ( users_id )
    references users ( id );
    ";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"publications\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    Disconnect($conn);

}

function RepliesTableFKs(){
    include("bdc.php");

    $sql = "alter table replies
    add constraint replies_comments_fk foreign key ( comments_id )
    references comments ( id );";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"replies\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "alter table replies
    add constraint replies_users_fk foreign key ( users_id )
    references users ( id );
    ";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"replies\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    Disconnect($conn);
}

function RoomsFKs(){
    include("bdc.php");

    $sql = "alter table rooms
    add constraint rooms_users_fk foreign key ( users_id )
    references users ( id );";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"rooms\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

     Disconnect($conn);
}

function UserBiosFKs(){
    include("bdc.php");

    $sql = "alter table user_bios
    add constraint user_bios_users_fk foreign key ( users_id )
    references users ( id );";

    if ($conn->query($sql) === TRUE) {
        echo "FK at \"user_bios\" Created Successfully";
    }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

     Disconnect($conn);
}


/////////////////////
//                 //
// CREATE DATABASE //
//                 //
/////////////////////
function CreateDB(){

CreateCommentsTable();
CreateProfileSharedPubsTable();
CreatePublicationsTable();
CreateRepliesTable();
CreateRoomsTable();
CreateUserBiosTable();
CreateUsersTable();
CommentsTableFKs();
ProfileSharedPubsTableFKs();
PublicationsTableFKs();
RepliesTableFKs();
RoomsFKs();

}
?>