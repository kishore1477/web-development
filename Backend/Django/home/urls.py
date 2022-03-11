from django.contrib import admin
from django.urls import  path

from  . import views
 


urlpatterns = [
      #  path('',views.home , name = 'home'),
       path('',views.index , name = 'index'),
    path('room/',views.room, name = "room"),
    path('about/',views.about, name = "about"),
    path('contact/',views.contact, name = "contact"),
    path('services/',views.services, name = " services")
     
      # path("", views.index, name='home')
]

 
# from django.contrib.auth import views as auth_views

# urlpatterns = [
#    url( r'^login/$',auth_views.LoginView.as_view(template_name="useraccounts/login.html"), name="login"),
# ]
