<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
		


	// datalist.php
	$Translation['quick search'] = "Tìm Kiếm";
	$Translation['records x to y of z'] = "Danh Sách Từ <FirstRecord> Đến <LastRecord> ";
	$Translation['filters'] = "(Lọc)";
	$Translation['filter'] = "Bộ Lọc";
	$Translation['filtered field'] = "Trường Đã Lọc";
	$Translation['comparison operator'] = "Trường Lọc";
	$Translation['comparison value'] = "Danh Sách Lọc";
	$Translation['and'] = "Và";
	$Translation['or'] = "Hoặc";
	$Translation['equal to'] = "Căn Hộ Đang Sử Dụng";
	$Translation['not equal to'] = "Căn Hộ Trống";
	$Translation['greater than'] = "Dân Cư Mới Tới";
	$Translation['greater than or equal to'] = "Dân Cư Rời Đi";
	$Translation['less than'] = "Thiết Bị Mới Lắp Đặt";
	$Translation['less than or equal to'] = "Thiết Bị Hư Hỏng";
	$Translation['like'] = "Nhân Viên Bảo Vệ";
	$Translation['not like'] = "Nhân Viên Lao Công";
	$Translation['is empty'] = "Khách Hàng";
	$Translation['is not empty'] = "Nhà Cung Cấp";
	$Translation['apply filters'] = "Lưu Lại";
	$Translation['save filters'] = "Lưu Lại Và Sao Chép";
	$Translation['saved filters title'] = "HTML Code For The Applied Filters";
	$Translation['saved filters instructions'] = "Copy the code below and paste it to an HTML file to save the filter you just defined so that you can return to it at any time in the future without having to redefine it. You can save this HTML code on your computer or on any server and access this prefiltered table view through it.";
	$Translation['hide code'] = "Hide this code";
	$Translation['printer friendly view'] = "Printer-friendly view";
	$Translation['save as csv'] = "Download as csv file (comma-separated values)";
	$Translation['edit filters'] = "Edit filters";
	$Translation['clear filters'] = "Clear filters";
	$Translation['order by'] = 'Ban Đầu';
	$Translation['go to page'] = 'Trang:';
	$Translation['none'] = 'None';
	$Translation['Select all records'] = 'Select all records';
	$Translation['With selected records'] = 'With selected records';
	$Translation['Print Preview Detail View'] = 'Xem Lại Trước Khi In Danh Sách';
	$Translation['Print Preview Table View'] = 'Print Preview Table View';
	$Translation['Print'] = 'In';
	$Translation['Cancel Printing'] = 'Thoát';
	$Translation['Cancel Selection'] = 'Cancel Selection';
	$Translation['Maximum records allowed to enable this feature is'] = 'Maximum records allowed to enable this feature is';
	$Translation['No matches found!'] = 'Không Danh Sách Hiển Thị!';
	$Translation['Start typing to get suggestions'] = 'Start typing to get suggestions.';

	// _dml.php
	$Translation['are you sure?'] = 'Are you sure you want to delete this record?';
	$Translation['add new record'] = 'Add new record';
	$Translation['update record'] = 'Update record';
	$Translation['delete record'] = 'Delete record';
	$Translation['deselect record'] = 'Deselect record';
	$Translation["couldn't delete"] = 'Could not delete the record due to the presence of <RelatedRecords> related record(s) in table [<TableName>]';
	$Translation['confirm delete'] = 'This record has <RelatedRecords> related record(s) in table [<TableName>]. Do you still want to delete it? <Delete> &nbsp; <Cancel>';
	$Translation['yes'] = 'Yes';
	$Translation['no'] = 'No';
	$Translation['pkfield empty'] = ' field is a primary key field and cannot be empty.';
	$Translation['upload image'] = 'Upload new file ';
	$Translation['select image'] = 'Select an image ';
	$Translation['remove image'] = 'Remove file';
	$Translation['month names'] = 'Tháng 1,Tháng 2,Tháng 3,Tháng 4,Tháng 5,Tháng 6,Tháng 7,Tháng 8,Tháng 9,Tháng 10,Tháng 11,Tháng 12';
	$Translation['field not null'] = 'You cannot leave this field empty.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Hôm Nay';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Hold CTRL key to select multiple items from the above list.';
	$Translation['Save New'] = 'Lưu Lại';
	$Translation['Save As Copy'] = 'Lưu Và Sao Chép';
	$Translation['Deselect'] = 'Thoát';
	$Translation['Add New'] = 'Thêm';
	$Translation['Delete'] = 'Xóa';
	$Translation['Cancel'] = 'Thoát';
	$Translation['Print Preview'] = 'In Danh Sách';
	$Translation['Save Changes'] = 'Lưu Lại';
	$Translation['CSV'] = 'Lưu File Excel';
	$Translation['Reset Filters'] = 'Tất Cả';
	$Translation['Find It'] = 'Find It';
	$Translation['Previous'] = 'Trước Đó';
	$Translation['Next'] = 'Tiếp Theo';
	$Translation['Back'] = 'Quay Lại';

	// lib.php
	$Translation['select a table'] = "Jump to ...";
	$Translation['homepage'] = "Trang Chủ";
	$Translation['error:'] = "Lỗi:";
	$Translation['sql error:'] = "SQL error:";
	$Translation['query:'] = "Query:";
	$Translation['< back'] = "Back";
	$Translation["if you haven't set up"] = "If you haven't set up the database yet, you can do so by clicking <a href='setup.php'>here</a>.";
	$Translation['file too large']="Error: The file you uploaded exceeds the maximum allowed size of <MaxSize> KB";
	$Translation['invalid file type']="Error: This file type is not allowed. Only <FileTypes> files can be uploaded";

	// setup.php
	$Translation['goto start page'] = "Back to start page";
	$Translation['no db connection'] = "Couldn't establish a database connection.";
	$Translation['no db name'] = "Couldn't access the database named '<DBName>' on this server.";
	$Translation['provide connection data'] = "Please provide the following data to connect to the database:";
	$Translation['mysql server'] = "MySQL server (host)";
	$Translation['mysql username'] = "MySQL Username";
	$Translation['mysql password'] = "MySQL password";
	$Translation['mysql db'] = "Database name";
	$Translation['connect'] = "Connect";
	$Translation['couldnt save config'] = "Couldn't save connection data into 'config.php'.<br />Please make sure that the folder:<br />'".dirname(__FILE__)."'<br />is writable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Setup already performed on";
	$Translation['delete md5'] = "If you want to force setup to run again, you should first delete the file 'setup.md5' from this folder.";
	$Translation['table exists'] = "Table <b><TableName></b> exists, containing <NumRecords> records.";
	$Translation['failed'] = "Failed";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL said:";
	$Translation['table uptodate'] = "Table is up-to-date.";
	$Translation['couldnt count'] = "Couldn't count records of table <b><TableName></b>";
	$Translation['creating table'] = "Creating table <b><TableName></b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Vui lòng đợi";

	// _view.php
	$Translation['tableAccessDenied']="Lấy làm tiếc! Bạn không có quyền truy cập bảng này. Vui lòng liên hệ với quản trị viên.";

	// incCommon.php
	$Translation['not signed in']="Bạn chưa đăng nhập";
	$Translation['sign in']="Đăng Nhập";
	$Translation['signed as']="Đăng ký với tư cách là";
	$Translation['sign out']="Đăng Xuất";
	$Translation['admin setup needed']="Thiết lập quản trị không được thực hiện. Vui lòng đăng nhập vào <a href=admin/> bảng điều khiển quản trị </a> để thực hiện thiết lập.";
	$Translation['db setup needed']="Thiết lập chương trình chưa được thực hiện. Trước tiên hãy đăng nhập vào <a href=setup.php> trang thiết lập </a>.";
	$Translation['new record saved']="Bản ghi mới đã được lưu thành công.";
	$Translation['record updated']="Các thay đổi đã được lưu thành công.";

	// index.php
	$Translation['admin area']="Admin Area";
	$Translation['login failed']="Lần đăng nhập trước của bạn không thành công. Thử lại.";
	$Translation['sign in here']="Hãy Đăng Nhập";
	$Translation['remember me']="Nhớ Tôi";
	$Translation['username']="Tên Tài Khoản";
	$Translation['password']="Mật Khẩu";
	$Translation['go to signup']="Không có tên người dùng? <br /> & nbsp; <a href=membership_signup.php> Đăng ký tại đây </a>";
	$Translation['forgot password']="Quên mật khẩu? <a href=membership_passwordReset.php> Nhấp vào đây</a>";
	$Translation['browse as guest']="<a href=index.php>Tiếp tục duyệt với tư cách admin</a>";
	$Translation['no table access']="Bạn không có đủ quyền để truy cập bất kỳ trang nào ở đây. Vui lòng đăng nhập trước.";
	$Translation['signup']="Đăng ký";

	// checkMemberID.php
	$Translation['user already exists']="Username '<MemberID>' already exists. Try another username.";
	$Translation['user available']="Username '<MemberID>' is available and you can take it.";
	$Translation['empty user']="Please type a username in the box first then click 'Check availability'.";

	// membership_thankyou.php
	$Translation['thanks']="Thank you for signing up!";
	$Translation['sign in no approval']="If you have chosen a group that doesn't require admin approval, you can sign in right now <a href=index.php?signIn=1>here</a>.";
	$Translation['sign in wait approval']="If you have chosen a group that requires admin approval, please wait for an email confirming your approval.";

	// membership_signup.php
	$Translation['username empty']="You must provide a username. Please go back and type a username";
	$Translation['password invalid']="You must provide a password of 4 characters or more, without spaces. Please go back and type a valid password";
	$Translation['password no match']="Password doesn't match. Please go back and correct the password";
	$Translation['username exists']="Username already exists. Please go back and choose a different username.";
	$Translation['email invalid']="Invalid email address. Please go back and correct your email address.";
	$Translation['group invalid']="Invalid group. Please go back and correct the group selection.";
	$Translation['sign up here']="Đăng Ký Tại Đây!";
	$Translation['registered? sign in']="Already registered? <a href=index.php?signIn=1>Sign in here</a>.";
	$Translation['sign up disabled']="Lấy làm tiếc! Đăng ký tạm thời bị vô hiệu hóa bởi quản trị viên. Thử lại sau.";
	$Translation['check availability']="Check if this username is available";
	$Translation['confirm password']="Xác Nhận Mật Khẩu";
	$Translation['email']="Địa Chỉ Email";
	$Translation['group']="Group";
	$Translation['groups *']="If you choose to sign up to a group marked with an asterisk (*), you won't be able to log in until the admin approves you. You'll receive an email when you are approved.";
	$Translation['sign up']="Đăng Ký";

	// membership_passwordReset.php
	$Translation['password reset']="Trang Lấy Lại Mật Khẩu";
	$Translation['password reset details']="Nhập tên người dùng hoặc địa chỉ email của bạn dưới đây. Sau đó, chúng tôi sẽ gửi một liên kết đặc biệt đến email của bạn. Sau khi nhấp vào liên kết đó, bạn sẽ được yêu cầu nhập mật khẩu mới.";
	$Translation['password reset subject']="Hướng dẫn đặt lại mật khẩu ";
	$Translation['password reset message']="Kính gửi thành viên, \ n Nếu bạn đã yêu cầu đặt lại / thay đổi mật khẩu của mình, vui lòng nhấp vào liên kết này: \ n <Liên kết đặt lại> \ n \ n Nếu bạn không yêu cầu đặt lại / thay đổi mật khẩu, vui lòng bỏ qua thông báo này. \ n \ n Trân trọng.";
	$Translation['password reset ready']="Một email với hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email đã đăng ký của bạn. Vui lòng làm theo hướng dẫn trong email đó. <br /> <br /> Nếu bạn không nhận được email này trong vòng 5 phút, hãy thử đặt lại mật khẩu của bạn và đảm bảo bạn nhập đúng tên người dùng hoặc địa chỉ email.";
	$Translation['password reset invalid']="Sai username hoặc password. <a href=membership_passwordReset.php> Thử lại </a> hoặc <a href=index.php> quay lại trang chủ </a>.";
	$Translation['password change']="Trang Thay Đổi Mật Khẩu";
	$Translation['new password']="Mật Khẩu Mới";
	$Translation['password reset done']="Mật khẩu của bạn đã được thay đổi thành công. Bạn có thể <a href=index.php?signOut=1> đăng nhập bằng mật khẩu mới tại đây </a>.";

    $Translation['Loading ...']='Đang Tải ...';
    $Translation['No records found']='No records found';
    $Translation['You can add children records after saving the main record first']='You can add child records after saving the main record first';

    $Translation['ascending'] = 'Tăng Lên';
    $Translation['descending'] = 'Giảm Xuống';
    $Translation['then by'] = 'Tiếp Theo';

	// membership_profile
	$Translation['Legend'] = 'Legend';
	$Translation['Table'] = 'Table';
	$Translation['Edit'] = 'Edit';
	$Translation['View'] = 'View';
	 $Translation['Only your own records'] = 'Chỉ Mình Tôi';
	 $Translation['All records owned by your group'] = 'Tất Cả Thành Viên Của Chung Cư';
	 $Translation['All records'] = 'Tất Cả Bản Ghi';
	$Translation['Not allowed'] = 'Not allowed';
	$Translation['Your info'] = 'Thông Tin Cá Nhân';
	$Translation['Hello user'] = 'Xin Chào Quản Lý!';
	$Translation['Your access permissions'] = 'Your access permissions';
	$Translation['Update profile'] = 'Cập Nhật Thông Tin';
	$Translation['Update password'] = 'Cập Nhật Mật Khẩu';
	$Translation['Change your password'] = 'Thay Đổi Mật Khẩu';
	$Translation['Old password'] = 'Mật Khẩu Cũ';
	$Translation['Password strength: weak'] = 'Độ Mạnh Mật Khẩu:Yếu';
	$Translation['Password strength: good'] = 'Độ Mạnh Mật Khẩu:Bình Thường';
	$Translation['Password strength: strong'] = 'Độ Mạnh Mật Khẩu:Tốt';
	$Translation['Wrong password'] = 'Mật Khẩu Cũ Không Đúng';
	$Translation['Your profile was updated successfully'] = 'Bạn Đã Cập Nhật Thông Tin Thành Công';
	$Translation['Your password was changed successfully'] = 'Bạn Đã Cập Nhật Mật Khẩu Thành Công';
	$Translation['Your IP address'] = 'Your IP address';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Danh Sách Hiển Thị';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Setup Data';
	$Translation['Database Information'] = 'Database Information';
	$Translation['Admin Information'] = 'Thông Tin Quản Lý';
	$Translation['setup intro 1'] = 'There doesn\'t seem to be a configuration file. This is necessary for the application to work.<br><br>This setup page will help you create that file. But in some server configurations this might not work. In that case you might need to adjust the folder permissions, or create the config file manually.';
	$Translation['setup intro 2'] = 'Welcome to your new AppGini application! Before getting started, we need some information about your database. You will need to know the following before proceeding:<ol><li>Database server (host)</li><li>Database name</li><li>Database username</li><li>Database password</li></ol>The above items were probably supplied to you by your web hosting provider. If you do not have this information, then you will need to contact them or refer to their service documentation before you can continue here. If you\'re ready, let\'s start!';
	$Translation['setup finished'] = '<b> Thành công! </b> <br> <br> Ứng dụng AppGini của bạn đã được cài đặt. Dưới đây là một số gợi ý để bắt đầu sử dụng nó:';
	$Translation['setup next 1'] = 'Start using your application to add data, or work with existing data, if any.';
	$Translation['setup next 2'] = 'Import existing data into your application from a CSV file.';
	$Translation['setup next 3'] = 'Go to the admin homepage where you can change many other application settings.';
	$Translation['db_name help'] = 'The name of the database you want to run your AppGini application in.';
	$Translation['db_server help'] = '<i>localhost</i> works on most servers. If not, you should be able to get this info from your web hosting provider.';
	$Translation['db_username help'] = 'Your MySQL username';
	$Translation['db_password help'] = 'Your MySQL password';
	$Translation['username help'] = 'Specify the admin username you\'d like to use to access the admin area. Must be four characters or more.';
	$Translation['password help'] = 'Specify a strong password to access the admin area.';
	$Translation['email help'] = 'Enter the email address where you want admin notifications to be sent.';
	$Translation['Continue'] = 'Tiếp Tục ...';
	$Translation['Lets go'] = 'Let\'s go!';
	$Translation['Submit'] = 'Gửi';
	$Translation['Hide'] = 'Ẩn trợ giúp';
	$Translation['Database info is correct'] = '&#10003; Database info is correct!';
	$Translation['Database connection error'] = '&#10007; Database connection error!';
	$Translation['The following errors occured'] = 'The following errors occured';
	$Translation['failed to create config instructions'] = 'This is most probably due to folder permissions that are set to prevent creating files by your web server. Don\'t worry! You can still create the config file manually.<br><br>Just paste the following code into a text editor and save the file as "config.php", then upload it using FTP or any other method to the folder %s on your server.';
	$Translation['Only show records having filterer'] = 'Only show records where %s is %s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'You don\'t have enough permissions to delete this record';
	$Translation['Couldn\'t delete this record'] = 'Couldn\'t delete this record';
	$Translation['The record has been deleted successfully'] = 'The record has been deleted successfully';
	$Translation['Couldn\'t save changes to the record'] = 'Couldn\'t save changes to the record';
	$Translation['Couldn\'t save the new record'] = 'Couldn\'t save the new record';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'Xem Thêm';
	$Translation['Confirm deleting multiple records'] = 'Xác Nhận Xóa Bản Ghi';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> hồ sơ sẽ bị xóa. Bạn có chắc chắn muốn làm điều này?';
	$Translation['Yes, delete them!'] = 'Có,Xóa Nó!';
	$Translation['No, keep them.'] = 'Không,Giữ Nó.';
	$Translation['Deleting record <i> of <n>'] = 'Xóa bản ghi <i> trong tổng số <n>';
	$Translation['Delete progress'] = 'Xóa Tiến Độ';
	$Translation['Show/hide details'] = 'Hiển Thị Tất Cả';
	$Translation['Connection error'] = 'Lỗi kết nối';
	$Translation['Add more actions'] = 'Thêm các hành động khác';
	$Translation['Update progress'] = 'Cập nhật tiến độ';
	$Translation['Change owner'] = 'Chủ sở hữu thay đổi';
	$Translation['Updating record <i> of <n>'] = 'Đang cập nhật bản ghi <i> của <n>';
	$Translation['Change owner of <n> selected records to'] = 'Thay đổi chủ sở hữu của <n> bản ghi đã chọn thành';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Tên người dùng <MemberID> đã tồn tại hoặc không hợp lệ. Đảm bảo bạn cung cấp tên người dùng chứa 4 đến 20 ký tự hợp lệ.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Invalid provider!';
	$Translation['invalid url'] = 'Invalid URL!';
	$Translation['cant retrieve coordinates from url'] = 'Can\'t retrieve coordinates from URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Maintenance mode is enabled! You can disable it from the admin home page.';
	$Translation['unique field error'] = 'This value already exists or is invalid. Please make sure to specify a unique valid value.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Show all records of this user from "<tablename>" table';
	$Translation['show all group records from table'] = 'Show all records of this group from "<tablename>" table';
	$Translation['email this user'] = 'Email this user';
	$Translation['email this group'] = 'Email this group';
	$Translation['owner'] = 'Owner';
	$Translation['created'] = 'Created';
	$Translation['last modified'] = 'Last modified';
	$Translation['record has no owner'] = 'This record has no assigned owner. You can assign an owner from the admin area.';
	$Translation['admin-only info'] = 'The above info is displayed because you are currently signed in as the super admin. Other users won\'t see this.';
	$Translation['discard changes confirm'] = 'Discard changes to this record?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Hide/Show columns';
	$Translation['next column'] = 'Next column';
	$Translation['previous column'] = 'Previous column';