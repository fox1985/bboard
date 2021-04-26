from django.contrib.staticfiles.views import serve
from django.urls import path
from django.views.decorators.cache import never_cache

from bboard import settings
from .views import index, other_page, profile, user_activate, by_rubric, detail

from .views import BBLoginView, BBLogoutView, ChangeUserInfoView, BBPasswordChageView, \
    RegisterUserView, RegisterDoneView, DeleteUserView

from django.conf.urls.static import static

app_name = 'main'

urlpatterns = [

    path('accounts/register/activate/<str:sing>/', user_activate, name='register_activate'),
    path('accounts/profile/delete/', DeleteUserView.as_view(), name='profile_delete'),
    path('accounts/password/change/', BBPasswordChageView.as_view(), name='password_change'),
    path('accounts/profile/change/', ChangeUserInfoView.as_view(), name='profile_change'),
    path('accounts/register/done/', RegisterDoneView.as_view(), name='register_done'),
    path('accounts/register/', RegisterUserView.as_view(), name='register'),
    path('accounts/logout/', BBLogoutView.as_view(), name='logout'),
    path('accounts/profile/', profile, name='profile'),
    path('accounts/login/', BBLoginView.as_view(), name='login'),
    path('<int:rubric_pk>/<int:pk>/', detail, name='detail'),
    path('<int:pk>/', by_rubric, name='by_rubric'),
    path('<str:page>/', other_page, name='other'),
    path('', index, name='index'),

]

if settings.DEBUG:
    urlpatterns.append(path('static/<path:path>', never_cache(serve)))
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)