from multiprocessing import context
from django.shortcuts import render, HttpResponse
from datetime import datetime
from home.models import Contact
from django.contrib import messages
# # Create your views here.
# def index(request):
# return HttpResponse("This is Home page")


# from django.http import HttpResponse
# from . import urls
def index(request):
     context = {
        "variable1": "This is about variable1",
        "variable2": "This is about variable2",
    }
    #  messages.success(request, 'Profile details updated.')
     return render(request,'index.html',context)
    # return HttpResponse("Hello, world. You're at the poll index.")
def home(request):
     return render(request,'home.html')
def  room(request):
     return render(request,'room.html')
def   about(request):
   
    return render(request,'about.html')
    # return HttpResponse(' About page')
    
def    contact(request):
    if request.method == 'POST':
        name = request.POST.get('name') 
        email = request.POST.get('email') 
        phone = request.POST.get('phone') 
        desc = request.POST.get('desc') 
        contact = Contact(name=name, email=email, phone=phone, desc=desc, date=datetime.today())
        contact.save()
        messages.success(request, 'Form Submitted Successfully')
    return render(request,'contact.html')
def    services(request):
    return render(request,'services.html')

