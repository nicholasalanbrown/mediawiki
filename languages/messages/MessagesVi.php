<?php
/** Vietnamese (Tiếng Việt)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @file
 * @ingroup Languages
 *
 * @author Apple
 * @author Arisa
 * @author Baonguyen21022003
 * @author Cheers!
 * @author DHN
 * @author Kaganer
 * @author Minh Nguyen
 * @author Mxn
 * @author Neoneurone
 * @author Nguyễn Thanh Quang
 * @author Prenn
 * @author Skye Darcy
 * @author Thaisk
 * @author Thanhtai2009
 * @author Tmct
 * @author Trần Nguyễn Minh Huy
 * @author Trần Thế Trung
 * @author Tttrung
 * @author Vietbio
 * @author Vinhtantran
 * @author Vương Ngân Hà
 * @author Withoutaname
 * @author לערי ריינהארט
 */

$namespaceNames = [
	NS_MEDIA            => 'Phương_tiện',
	NS_SPECIAL          => 'Đặc_biệt',
	NS_TALK             => 'Thảo_luận',
	NS_USER             => 'Thành_viên',
	NS_USER_TALK        => 'Thảo_luận_Thành_viên',
	NS_PROJECT_TALK     => 'Thảo_luận_$1',
	NS_FILE             => 'Tập_tin',
	NS_FILE_TALK        => 'Thảo_luận_Tập_tin',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Thảo_luận_MediaWiki',
	NS_TEMPLATE         => 'Bản_mẫu',
	NS_TEMPLATE_TALK    => 'Thảo_luận_Bản_mẫu',
	NS_HELP             => 'Trợ_giúp',
	NS_HELP_TALK        => 'Thảo_luận_Trợ_giúp',
	NS_CATEGORY         => 'Thể_loại',
	NS_CATEGORY_TALK    => 'Thảo_luận_Thể_loại',
];

$namespaceAliases = [
	'Hình' => NS_FILE,
	'Thảo_luận_Hình' => NS_FILE_TALK,
	'Tiêu_bản' => NS_TEMPLATE,
	'Thảo_luận_Tiêu_bản' => NS_TEMPLATE_TALK,
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Người_dùng_tích_cực' ],
	'Allmessages'               => [ 'Mọi_thông_điệp', 'Mọi_thông_báo' ],
	'AllMyUploads'              => [ 'Mọi_tập_tin_của_tôi', 'Mọi_tập_tin_tôi_tải_lên' ],
	'Allpages'                  => [ 'Mọi_bài' ],
	'Ancientpages'              => [ 'Trang_cũ' ],
	'ApiHelp'                   => [ 'Trợ_giúp_API' ],
	'Badtitle'                  => [ 'Tựa_đề_hỏng' ],
	'Blankpage'                 => [ 'Trang_trắng' ],
	'Block'                     => [ 'Cấm', 'Cấm_IP', 'Cấm_thành_viên', 'Cấm_người_dùng' ],
	'BlockList'                 => [ 'Danh_sách_cấm' ],
	'Booksources'               => [ 'Nguồn_sách' ],
	'BrokenRedirects'           => [ 'Đổi_hướng_sai' ],
	'Categories'                => [ 'Thể_loại' ],
	'ChangeEmail'               => [ 'Đổi_thư_điện_tử' ],
	'ChangePassword'            => [ 'Đổi_mật_khẩu' ],
	'ComparePages'              => [ 'So_sánh_trang' ],
	'Confirmemail'              => [ 'Xác_nhận_thư' ],
	'Contributions'             => [ 'Đóng_góp' ],
	'CreateAccount'             => [ 'Mở_tài_khoản', 'Đăng_ký', 'Đăng_kí' ],
	'Deadendpages'              => [ 'Trang_đường_cùng' ],
	'DeletedContributions'      => [ 'Đóng_góp_bị_xóa', 'Đóng_góp_bị_xoá' ],
	'Diff'                      => [ 'Khác', 'Khác_biệt' ],
	'DoubleRedirects'           => [ 'Đổi_hướng_kép' ],
	'EditWatchlist'             => [ 'Sửa_danh_sách_theo_dõi' ],
	'Emailuser'                 => [ 'Gửi_thư', 'Gửi_thư_điện_tử' ],
	'ExpandTemplates'           => [ 'Bung_bản_mẫu', 'Bung_tiêu_bản' ],
	'Export'                    => [ 'Xuất' ],
	'Fewestrevisions'           => [ 'Ít_phiên_bản_nhất' ],
	'FileDuplicateSearch'       => [ 'Tìm_tập_tin_trùng' ],
	'Filepath'                  => [ 'Đường_dẫn_tập_tin', 'Đường_dẫn_file' ],
	'Import'                    => [ 'Nhập' ],
	'Invalidateemail'           => [ 'Hủy_thư', 'Hủy_thư_điện_tử', 'Huỷ_thư', 'Huỷ_thư_điện_tử', 'Tắt_thư' ],
	'JavaScriptTest'            => [ 'Thử_JavaScript' ],
	'LinkSearch'                => [ 'Tìm_liên_kết' ],
	'Listadmins'                => [ 'Danh_sách_bảo_quản_viên', 'Danh_sách_admin' ],
	'Listbots'                  => [ 'Danh_sách_bot', 'Danh_sách_robot' ],
	'ListDuplicatedFiles'       => [ 'Tập_tin_trùng_lắp' ],
	'Listfiles'                 => [ 'Danh_sách_tập_tin', 'Danh_sách_hình' ],
	'Listgrouprights'           => [ 'Quyền_nhóm_người_dùng' ],
	'Listredirects'             => [ 'Trang_đổi_hướng' ],
	'Listusers'                 => [ 'Danh_sách_thành_viên' ],
	'Lockdb'                    => [ 'Khóa_CSDL', 'Khóa_cơ_sở_dữ_liệu', 'Khoá_CSDL', 'Khoá_cơ_sở_dữ_liệu' ],
	'Log'                       => [ 'Nhật_trình' ],
	'Lonelypages'               => [ 'Trang_mồ_côi' ],
	'Longpages'                 => [ 'Trang_dài' ],
	'MediaStatistics'           => [ 'Thống_kê_phương_tiện' ],
	'MergeHistory'              => [ 'Trộn_lịch_sử' ],
	'MIMEsearch'                => [ 'Tìm_MIME' ],
	'Mostcategories'            => [ 'Thể_loại_lớn_nhất' ],
	'Mostimages'                => [ 'Tập_tin_liên_kết_nhiều_nhất' ],
	'Mostinterwikis'            => [ 'Nhiều_liên_wiki_nhất', 'Nhiều_interwiki_nhất' ],
	'Mostlinked'                => [ 'Liên_kết_nhiều_nhất' ],
	'Mostlinkedcategories'      => [ 'Thể_loại_liên_kết_nhiều_nhất' ],
	'Mostlinkedtemplates'       => [ 'Bản_mẫu_liên_kết_nhiều_nhất', 'Tiêu_bản_liên_kết_nhiều_nhất' ],
	'Mostrevisions'             => [ 'Nhiều_phiên_bản_nhất' ],
	'Movepage'                  => [ 'Di_chuyển', 'Đổi_tên_trang' ],
	'Mycontributions'           => [ 'Đóng_góp_của_tôi', 'Tôi_đóng_góp' ],
	'MyLanguage'                => [ 'Ngôn_ngữ_tôi' ],
	'Mypage'                    => [ 'Trang_tôi', 'Trang_cá_nhân' ],
	'Mytalk'                    => [ 'Thảo_luận_tôi', 'Trang_thảo_luận_của_tôi' ],
	'Myuploads'                 => [ 'Tập_tin_tôi' ],
	'Newimages'                 => [ 'Tập_tin_mới', 'Hình_mới' ],
	'Newpages'                  => [ 'Trang_mới' ],
	'PageLanguage'              => [ 'Ngôn_ngữ_trang' ],
	'PagesWithProp'             => [ 'Trang_theo_thuộc_tính' ],
	'PasswordReset'             => [ 'Tái_tạo_mật_khẩu', 'Đặt_lại_mật_khẩu' ],
	'PermanentLink'             => [ 'Liên_kết_thường_trực' ],
	'Preferences'               => [ 'Tùy_chọn', 'Tuỳ_chọn' ],
	'Prefixindex'               => [ 'Tiền_tố' ],
	'Protectedpages'            => [ 'Trang_khóa', 'Trang_khoá' ],
	'Protectedtitles'           => [ 'Tựa_đề_bị_khóa', 'Tựa_đề_bị_khoá' ],
	'RandomInCategory'          => [ 'Ngẫu_nhiên_trong_thể_loại' ],
	'Randompage'                => [ 'Ngẫu_nhiên' ],
	'Randomredirect'            => [ 'Đổi_hướng_ngẫu_nhiên' ],
	'Randomrootpage'            => [ 'Trang_gốc_ngẫu_nhiên' ],
	'Recentchanges'             => [ 'Thay_đổi_gần_đây' ],
	'Recentchangeslinked'       => [ 'Thay_đổi_liên_quan' ],
	'Redirect'                  => [ 'Đổi_hướng' ],
	'ResetTokens'               => [ 'Đặt_lại_dấu_hiệu' ],
	'Revisiondelete'            => [ 'Xóa_phiên_bản', 'Xoá_phiên_bản' ],
	'RunJobs'                   => [ 'Chạy_việc' ],
	'Search'                    => [ 'Tìm_kiếm' ],
	'Shortpages'                => [ 'Trang_ngắn' ],
	'Specialpages'              => [ 'Trang_đặc_biệt' ],
	'Statistics'                => [ 'Thống_kê' ],
	'Tags'                      => [ 'Thẻ' ],
	'TrackingCategories'        => [ 'Thể_loại_theo_dõi' ],
	'Unblock'                   => [ 'Bỏ_cấm' ],
	'Uncategorizedcategories'   => [ 'Thể_loại_chưa_phân_loại' ],
	'Uncategorizedimages'       => [ 'Tập_tin_chưa_phân_loại', 'Hình_chưa_phân_loại' ],
	'Uncategorizedpages'        => [ 'Trang_chưa_phân_loại' ],
	'Uncategorizedtemplates'    => [ 'Bản_mẫu_chưa_phân_loại', 'Tiêu_bản_chưa_phân_loại' ],
	'Undelete'                  => [ 'Phục_hồi' ],
	'Unlockdb'                  => [ 'Mở_khóa_CSDL', 'Mở_khóa_cơ_sở_dữ_liệu', 'Mở_khoá_CSDL', 'Mở_khoá_cơ_sở_dữ_liệu' ],
	'Unusedcategories'          => [ 'Thể_loại_chưa_dùng' ],
	'Unusedimages'              => [ 'Tập_tin_chưa_dùng', 'Hình_chưa_dùng' ],
	'Unusedtemplates'           => [ 'Bản_mẫu_chưa_dùng', 'Tiêu_bản_chưa_dùng' ],
	'Unwatchedpages'            => [ 'Trang_chưa_theo_dõi' ],
	'Upload'                    => [ 'Tải_lên' ],
	'UploadStash'               => [ 'Hàng_đợi_tải_lên' ],
	'Userlogin'                 => [ 'Đăng_nhập' ],
	'Userlogout'                => [ 'Đăng_xuất' ],
	'Userrights'                => [ 'Quyền_thành_viên', 'Quyền_người_dùng' ],
	'Version'                   => [ 'Phiên_bản' ],
	'Wantedcategories'          => [ 'Thể_loại_cần_thiết' ],
	'Wantedfiles'               => [ 'Tập_tin_cần_thiết' ],
	'Wantedpages'               => [ 'Trang_cần_thiết' ],
	'Wantedtemplates'           => [ 'Bản_mẫu_cần_thiết', 'Tiêu_bản_cần_thiết' ],
	'Watchlist'                 => [ 'Danh_sách_theo_dõi' ],
	'Whatlinkshere'             => [ 'Liên_kết_đến_đây' ],
	'Withoutinterwiki'          => [ 'Không_liên_wiki', 'Không_interwiki' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'MÃ_HÓA_NEO', 'MÃHÓANEO', 'MÃ_HOÁ_NEO', 'MÃHOÁNEO', 'ANCHORENCODE' ],
	'articlepath'               => [ '0', 'ĐƯỜNG_DẪN_BÀI', 'ĐƯỜNGDẪNBÀI', 'LỐI_BÀI', 'LỐIBÀI', 'ARTICLEPATH' ],
	'basepagename'              => [ '1', 'TÊN_TRANG_GỐC', 'TÊNTRANGGỐC', 'BASEPAGENAME' ],
	'canonicalurl'              => [ '0', 'URL_CHUẨN:', 'URLCHUẨN:', 'CANONICALURL:' ],
	'cascadingsources'          => [ '1', 'NGUỒN_THEO_TẦNG', 'NGUỒNTHEOTẦNG', 'CASCADINGSOURCES' ],
	'contentlanguage'           => [ '1', 'NGÔN_NGỮ_NỘI_DUNG', 'NGÔNNGỮNỘIDUNG', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'NGÀY_NÀY', 'NGÀYNÀY', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'NGÀY_NÀY_2', 'NGÀYNÀY2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'TÊN_NGÀY_NÀY', 'TÊNNGÀYNÀY', 'CURRENTDAYNAME' ],
	'currenthour'               => [ '1', 'GIỜ_HIỆN_TẠI', 'GIỜHIỆNTẠI', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'THÁNG_NÀY', 'THÁNGNÀY', 'THÁNG_NÀY_2', 'THÁNGNÀY2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'THÁNG_NÀY_1', 'THÁNGNÀY1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'TÊN_NGẮN_THÁNG_NÀY', 'TÊNNGẮNTHÁNGNÀY', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'TÊN_THÁNG_NÀY', 'TÊNTHÁNGNÀY', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'TÊN_DÀI_THÁNG_NÀY', 'TÊNDÀITHÁNGNÀY', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'GIỜ_NÀY', 'GIỜNÀY', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'MỐC_THỜI_GIAN_NÀY', 'MỐCTHỜIGIANNÀY', 'DẤU_THỜI_GIAN_NÀY', 'DẤUTHỜIGIANNÀY', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'BẢN_NÀY', 'BẢNNÀY', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'TUẦN_NÀY', 'TUẦNNÀY', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'NĂM_NÀY', 'NĂMNÀY', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'XẾP_MẶC_ĐỊNH:', 'XẾPMẶCĐỊNH:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'defaultsort_noerror'       => [ '0', 'không_lỗi', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'không_thay_thế', 'noreplace' ],
	'directionmark'             => [ '1', 'DẤU_HƯỚNG_VIẾT', 'DẤUHƯỚNGVIẾT', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'TÊN_HIỂN_THỊ', 'TÊNHIỂNTHỊ', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'ĐƯỜNG_DẪN_TẬP_TIN', 'ĐƯỜNGDẪNTẬPTIN', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__LUÔN_MỤC_LỤC__', '__LUÔNMỤCLỤC__', '__FORCETOC__' ],
	'formatdate'                => [ '0', 'định_dạng_ngày', 'địnhdạngngày', 'formatdate', 'dateformat' ],
	'formatnum'                 => [ '0', 'PHÂN_CHIA_SỐ', 'PHÂNCHIASỐ', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'TÊN_TRANG_ĐỦ', 'TÊNTRANGĐỦ', 'FULLPAGENAME' ],
	'fullurl'                   => [ '0', 'URL_ĐỦ:', 'URLĐỦ:', 'FULLURL:' ],
	'gender'                    => [ '0', 'GIỐNG:', 'GENDER:' ],
	'grammar'                   => [ '0', 'NGỮ_PHÁP:', 'NGỮPHÁP:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__THỂ_LOẠI_ẨN__', '__THỂLOẠIẨN__', '__HIDDENCAT__' ],
	'img_alt'                   => [ '1', 'thế=$1', 'thay_thế=$1', 'alt=$1' ],
	'img_baseline'              => [ '1', 'chân-chữ', 'baseline' ],
	'img_border'                => [ '1', 'viền', 'border' ],
	'img_bottom'                => [ '1', 'dưới', 'bottom' ],
	'img_center'                => [ '1', 'giữa', 'center', 'centre' ],
	'img_class'                 => [ '1', 'lớp=$1', 'class=$1' ],
	'img_framed'                => [ '1', 'khung', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'không_khung', 'frameless' ],
	'img_lang'                  => [ '1', 'tiếng=$1', 'ngôn_ngữ=$1', 'lang=$1' ],
	'img_left'                  => [ '1', 'trái', 'left' ],
	'img_link'                  => [ '1', 'liên_kết=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'nhỏ=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'nửa-chiều-cao', 'middle' ],
	'img_none'                  => [ '1', 'không', 'none' ],
	'img_page'                  => [ '1', 'trang=$1', 'trang_$1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'phải', 'right' ],
	'img_sub'                   => [ '1', 'chỉ-số-dưới', 'sub' ],
	'img_super'                 => [ '1', 'chỉ-số-trên', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'dưới-chữ', 'text-bottom' ],
	'img_text_top'              => [ '1', 'trên-chữ', 'text-top' ],
	'img_thumbnail'             => [ '1', 'nhỏ', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'trên', 'top' ],
	'img_upright'               => [ '1', 'đứng', 'đứng=$1', 'đứng_$1', 'upright', 'upright=$1', 'upright $1' ],
	'index'                     => [ '1', '__CHỈ_MỤC__', '__CHỈMỤC__', '__INDEX__' ],
	'int'                       => [ '0', 'NỘI:', 'INT:' ],
	'language'                  => [ '0', '#NGÔN_NGỮ:', '#NGÔNNGỮ:', '#LANGUAGE:' ],
	'lc'                        => [ '0', 'CHỮ_HOA:', 'CHỮHOA:', 'LC:' ],
	'lcfirst'                   => [ '0', 'CHỮ_ĐẦU_HOA:', 'CHỮĐẦUHOA:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'NGÀY_ĐỊA_PHƯƠNG', 'NGÀYĐỊAPHƯƠNG', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'NGÀY_ĐỊA_PHƯƠNG_2', 'NGÀYĐỊAPHƯƠNG2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'TÊN_NGÀY_ĐỊA_PHƯƠNG', 'TÊNNGÀYĐỊAPHƯƠNG', 'LOCALDAYNAME' ],
	'localhour'                 => [ '1', 'GIỜ_ĐỊA_PHƯƠNG', 'GIỜĐỊAPHƯƠNG', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'THÁNG_ĐỊA_PHƯƠNG', 'THÁNGĐỊAPHƯƠNG', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'THÁNG_ĐỊA_PHƯƠNG_1', 'THÁNGĐỊAPHƯƠNG1', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'THÁNG_ĐỊA_PHƯƠNG_TẮT', 'THÁNGĐỊAPHƯƠNGTẮT', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'TÊN_THÁNG_ĐỊA_PHƯƠNG', 'TÊNTHÁNGĐỊAPHƯƠNG', 'LOCALMONTHNAME' ],
	'localtime'                 => [ '1', 'THỜI_GIAN_ĐỊA_PHƯƠNG', 'THỜIGIANĐỊAPHƯƠNG', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'MỐC_THỜI_GIAN_ĐỊA_PHƯƠNG', 'MỐCTHỜIGIANĐỊAPHƯƠNG', 'DẤU_THỜI_GIAN_ĐỊA_PHƯƠNG', 'DẤUTHỜIGIANĐỊAPHƯƠNG', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'URL_ĐỊA_PHƯƠNG:', 'URLĐỊAPHƯƠNG:', 'LOCALURL:' ],
	'localweek'                 => [ '1', 'TUẦN_ĐỊA_PHƯƠNG', 'TUẦNĐỊAPHƯƠNG', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'NĂM_ĐỊA_PHƯƠNG', 'NĂMĐỊAPHƯƠNG', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'NHẮN:', 'MSG:' ],
	'msgnw'                     => [ '0', 'NHẮN_MỚI:', 'NHẮNMỚI:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'KHÔNG_GIAN_TÊN', 'KHÔNGGIANTÊN', 'NAMESPACE' ],
	'namespacenumber'           => [ '1', 'SỐ_KHÔNG_GIAN_TÊN', 'SỐKHÔNGGIANTÊN', 'NAMESPACENUMBER' ],
	'newsectionlink'            => [ '1', '__LIÊN_KẾT_MỤC_MỚI__', '__LIÊNKẾTMỤCMỚI__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'          => [ '0', '__KHÔNG_CHUYỂN_NỘI_DUNG__', '__KHÔNGCHUYỂNNỘIDUNG__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__KHÔNG_NÚT_SỬA_MỤC__', '__KHÔNGNÚTSỬAMỤC__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__KHÔNG_ALBUM__', '__KHÔNGALBUM__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__KHÔNG_CHỈ_MỤC__', '__KHÔNGCHỈMỤC__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', '__KHÔNG_LIÊN_KẾT_MỤC_MỚI__', '__KHÔNGLIÊNKẾTMỤCMỚI__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'            => [ '0', '__KHÔNG_CHUYỂN_TÊN__', '__KHÔNGCHUYỂNTÊN__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__KHÔNG_MỤC_LỤC__', '__KHÔNGMỤCLỤC__', '__NOTOC__' ],
	'ns'                        => [ '0', 'KGT:', 'NS:' ],
	'numberingroup'             => [ '1', 'CỠ_NHÓM', 'CỠNHÓM', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'SỐ_THÀNH_VIÊN_TÍCH_CỰC', 'SỐTHÀNHVIÊNTÍCHCỰC', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'SỐ_BẢO_QUẢN_VIÊN', 'SỐBẢOQUẢNVIÊN', 'SỐ_QUẢN_LÝ', 'SỐQUẢNLÝ', 'SỐ_QUẢN_LÍ', 'SỐQUẢNLÍ', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'SỐ_BÀI', 'SỐBÀI', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'SỐ_SỬA_ĐỔI', 'SỐSỬAĐỔI', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'SỐ_TẬP_TIN', 'SỐTẬPTIN', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'SỐ_TRANG', 'SỐTRANG', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'SỐ_THÀNH_VIÊN', 'SỐTHÀNHVIÊN', 'NUMBEROFUSERS' ],
	'pageid'                    => [ '0', 'ID_TRANG', 'IDTRANG', 'PAGEID' ],
	'pagename'                  => [ '1', 'TÊN_TRANG', 'TÊNTRANG', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'TÊN_TRANG_2', 'TÊNTRANG2', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'CỠ_THỂ_LOẠI', 'CỠTHỂLOẠI', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'       => [ '0', 'tất_cả', 'all' ],
	'pagesincategory_files'     => [ '0', 'tập_tin', 'files' ],
	'pagesincategory_pages'     => [ '0', 'trang', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'thể_loại_con', 'subcats' ],
	'pagesinnamespace'          => [ '1', 'CỠ_KHÔNG_GIAN_TÊN:', 'CỠKHÔNGGIANTÊN:', 'CỠ_KGT:', 'CỠKGT:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'CỠ_TRANG', 'CỠTRANG', 'PAGESIZE' ],
	'plural'                    => [ '0', 'SỐ_NHIỀU:', 'SỐNHIỀU:', 'PLURAL:' ],
	'protectionlevel'           => [ '1', 'MỨC_KHÓA', 'MỨCKHÓA', 'MỨC_KHOÁ', 'MỨCKHOÁ', 'PROTECTIONLEVEL' ],
	'redirect'                  => [ '0', '#đổi', '#REDIRECT' ],
	'revisionday'               => [ '1', 'NGÀY_BẢN', 'NGÀYBẢN', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'NGÀY_BẢN_2', 'NGÀYBẢN2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'SỐ_BẢN', 'SỐBẢN', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'THÁNG_BẢN', 'THÁNGBẢN', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'THÁNG_BẢN_1', 'THÁNGBẢN1', 'REVISIONMONTH1' ],
	'revisionsize'              => [ '1', 'CỠ_PHIÊN_BẢN', 'CỠPHIÊNBẢN', 'REVISIONSIZE' ],
	'revisiontimestamp'         => [ '1', 'MỐC_THỜI_GIAN_BẢN', 'MỐCTHỜIGIANBẢN', 'DẤU_THỜI_GIAN_BẢN', 'DẤUTHỜIGIANBẢN', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'NGƯỜI_DÙNG_BẢN', 'NGƯỜIDÙNGBẢN', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'NĂM_BẢN', 'NĂMBẢN', 'REVISIONYEAR' ],
	'safesubst'                 => [ '0', 'THẾ_AN_TOÀN:', 'SAFESUBST:' ],
	'scriptpath'                => [ '0', 'ĐƯỜNG_DẪN_KỊCH_BẢN', 'ĐƯỜNGDẪNKỊCHBẢN', 'ĐƯỜNG_DẪN_SCRIPT', 'ĐƯỜNGDẪNSCRIPT', 'SCRIPTPATH' ],
	'server'                    => [ '0', 'MÁY_CHỦ', 'MÁYCHỦ', 'SERVER' ],
	'servername'                => [ '0', 'TÊN_MÁY_CHỦ', 'TÊNMÁYCHỦ', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'TÊN_MẠNG', 'TÊNMẠNG', 'SITENAME' ],
	'special'                   => [ '0', 'đặc_biệt', 'special' ],
	'staticredirect'            => [ '1', '__ĐỔI_HƯỚNG_NHẤT_ĐỊNH__', '__ĐỔIHƯỚNGNHẤTĐỊNH__', '__STATICREDIRECT__' ],
	'stylepath'                 => [ '0', 'ĐƯỜNG_DẪN_KIỂU', 'ĐƯỜNGDẪNKIỂU', 'STYLEPATH' ],
	'subjectpagename'           => [ '1', 'TÊN_TRANG_NỘI_DUNG', 'TÊNTRANGNỘIDUNG', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectspace'              => [ '1', 'KGT_NỘI_DUNG', 'KGTNỘIDUNG', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subpagename'               => [ '1', 'TÊN_TRANG_PHỤ', 'TÊNTRANGPHỤ', 'SUBPAGENAME' ],
	'subst'                     => [ '0', 'THẾ:', 'SUBST:' ],
	'tag'                       => [ '0', 'thẻ', 'tag' ],
	'talkpagename'              => [ '1', 'TÊN_TRANG_THẢO_LUẬN', 'TÊNTRANGTHẢOLUẬN', 'TALKPAGENAME' ],
	'talkspace'                 => [ '1', 'KGT_THẢO_LUẬN', 'KGTTHẢOLUẬN', 'TALKSPACE' ],
	'toc'                       => [ '0', '__MỤC_LỤC__', '__MỤCLỤC__', '__TOC__' ],
	'uc'                        => [ '0', 'CHỮ_THƯỜNG:', 'CHỮTHƯỜNG:', 'UC:' ],
	'ucfirst'                   => [ '0', 'CHỮ_ĐẦU_THƯỜNG:', 'CHỮĐẦUTHƯỜNG:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'MÃ_HÓA_URL:', 'MÃHÓAURL:', 'MÃ_HOÁ_URL:', 'MÃHOÁURL:', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'ĐƯỜNG_DẪN', 'ĐƯỜNGDẪN', 'PATH' ],
	'url_query'                 => [ '0', 'TRUY_VẤN', 'TRUYVẤN', 'QUERY' ],
];

$datePreferences = [
	'default',
	'vi normal',
	'vi spelloutmonth',
	'vi shortcolon',
	'vi shorth',
	'ISO 8601',
];

$defaultDateFormat = 'vi normal';

$dateFormats = [
	'vi normal time' => 'H:i',
	'vi normal date' => '"ngày" j "tháng" n "năm" Y',
	'vi normal both' => 'H:i, "ngày" j "tháng" n "năm" Y',

	'vi spelloutmonth time' => 'H:i',
	'vi spelloutmonth date' => '"ngày" j xg "năm" Y',
	'vi spelloutmonth both' => 'H:i, "ngày" j xg "năm" Y',

	'vi shortcolon time' => 'H:i',
	'vi shortcolon date' => 'j/n/Y',
	'vi shortcolon both' => 'H:i, j/n/Y',

	'vi shorth time' => 'H"h"i',
	'vi shorth date' => 'j/n/Y',
	'vi shorth both' => 'H"h"i, j/n/Y',
];

$datePreferenceMigrationMap = [
	'default',
	'vi normal',
	'vi normal',
	'vi normal',
];

$linkTrail = "/^([a-zàâçéèêîôûäëïöüùÇÉÂÊÎÔÛÄËÏÖÜÀÈÙ]+)(.*)$/sDu";
$separatorTransformTable = [ ',' => '.', '.' => ',' ];
