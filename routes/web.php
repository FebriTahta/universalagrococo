<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SpecialOfferController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ImageheaderController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ImagemenuController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClientController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    // return view('home.index');
    return redirect('/login');
});
//FE
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//LANDING
Route::get('/',[LandingController::class,'index'])->name('landing');
//PRODUCT
Route::get('/all-product',[ProductController::class, 'list'])->name('all.product');
Route::get('/detail-product/{slug_product}',[ProductController::class, 'detail']);
//CONTACT
Route::get('/contact',[ContactController::class,'index'])->name('contact');
//ABOUT
Route::get('/about-us',[AboutController::class,'index'])->name('about');
//KOMENTAR
Route::post('/komen-product-post',[KomentarController::class,'komen_store'])->name('komen.store');
//CLIENT
Route::post('/client-message-post',[ClientController::class,'client_store'])->name('client.store');
//AFTERMESSAGE
Route::get('/message-sent/{slug_client}',[ClientController::class,'after_message']);


Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
//BE
//SLIDER
Route::get('/be-slider',[SliderController::class, 'be_page_slider'])->name('be_slider.page');
Route::post('/be-slider-store',[SliderController::class,'be_slider_store'])->name('be_slider.store');
Route::get('/be-slider-data',[SliderController::class,'be_slider_data'])->name('be_slider.data');
Route::post('/be-slider-dell',[SliderController::class,'be_slider_dell'])->name('be_slider.dell');
//ABOUT
Route::get('/be-about',[AboutController::class, 'be_page_about'])->name('be_about.page');
Route::post('/be-about-store',[AboutController::class, 'be_about_store'])->name('be_about.store');
Route::get('/be-about-preview',[AboutController::class, 'be_about_preview'])->name('be_about.preview');
//SPECIAL OFFERS
Route::get('/be-special-off',[SpecialOfferController::class,'be_special_off_page'])->name('be_special_off.page');
Route::post('/be-special-off-store',[SpecialOfferController::class, 'be_special_off_store'])->name('be_special_off.store');
Route::get('/be-special-off-preview',[SpecialOfferController::class, 'be_special_off_preview'])->name('be_special_off.preview');
//INVITATION
Route::get('/be-invitation',[InvitationController::class,'be_invitation_page'])->name('be_invitation.page');
Route::post('/be-invitation-store',[InvitationController::class, 'be_invitation_store'])->name('be_invitation.store');
Route::get('/be-invitation-preview',[InvitationController::class, 'be_invitation_preview'])->name('be_invitation_off.preview');
//PRODUCT
Route::get('/be-product',[ProductController::class,'be_product_page'])->name('be_product.page');
Route::post('/be-product-store',[ProductController::class,'be_product_store'])->name('be_product.store');
Route::get('/be-product-data',[ProductController::class,'be_product_data'])->name('be_product.data');
Route::post('/be-product-dell',[ProductController::class,'be_product_dell'])->name('be_product.dell');
//CONTACT
Route::get('/be-contact',[ContactController::class,'be_contact_page'])->name('be_contact.page');
Route::post('/be-contact-store',[ContactController::class,'be_contact_store'])->name('be_contact.store');
//SERVICE
Route::get('/be-service',[ServiceController::class,'be_service_page'])->name('be_service.page');
Route::get('/be-service-data',[ServiceController::class,'be_service_data'])->name('be_service.data');
Route::post('/be-service-store',[ServiceController::class,'be_service_store'])->name('be_service.store');
Route::post('/be-service-dell',[ServiceController::class,'be_service_dell'])->name('be_service.dell');
//IMAGEHEADER
Route::get('/be-imagehead',[ImageheaderController::class,'be_imagehead_page'])->name('be_imagehead.page');
Route::post('/be-imagehead-store',[ImageheaderController::class,'be_imagehead_store'])->name('be_imagehead.store');
//IMAGEMENU
Route::get('/be-imagemenu',[ImagemenuController::class,'be_imagemenu_page'])->name('be_imagemenu.page');
Route::post('/be-imagemenu-store',[ImagemenuController::class,'be_imagemenu_store'])->name('be_imagemenu.store');
//PRODUCTCOMMENT
Route::get('/be-product-comment',[KomentarController::class,'be_product_comment_page'])->name('be_produkomen.page');
Route::get('/be-product-comment-data',[KomentarController::class,'be_product_comment_data'])->name('be_produkomen.data');
Route::post('/be-product-comment-dell',[KomentarController::class,'be_product_comment_dell'])->name('be_produkomen.dell');
//CLIENTMESSAGE
Route::get('/be-client',[ClientController::class,'be_client_page'])->name('be_client.page');
Route::get('/be-client-data',[ClientController::class,'be_client_data'])->name('be_client.data');
Route::post('/be-client-dell',[ClientController::class,'be_client_dell'])->name('be_client.dell');
//
Route::get('/be-account',[AccountController::class,'be_account_page'])->name('be_account.page');
Route::get('/be-account-data',[AccountController::class,'be_account_data'])->name('be_account.data');
Route::post('/be-account-store',[AccountController::class,'be_account_store'])->name('be_account.store');
Route::post('/be-account-dell',[AccountController::class,'be_account_dell'])->name('be_account.dell');
});


//  new front end
