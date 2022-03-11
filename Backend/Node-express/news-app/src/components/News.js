// Api Key mine
// 447800 this.props.pageSize2b1641d1b54769cef9709b62      
//   this.props.pageSize2 this.props.pageSize126181408
// https://newsapi.org/v2/top-headlines?country=us&apiKey=447800 this.props.pageSize2b1641d1b54769cef9709b62     
import React, { Component } from 'react';
import NewsItem from './NewsItem';
import Spinner from './Spinner';

export default class News extends Component {

    constructor(){
        super();
        console.log( "this is constructor");
        this.state = {
            articles: [],
            loading : false,
            page:1


        }
    }
   async componentDidMount(){
      console.log( "cmd");

       
      // let url = "https://newsdata.io/api/1/news?apikey=pub_4059365ac29b76f4321402afe  this.props.pageSizeb4b1f2d46&q=business&page=1";
     
      let url = `https://newsapi.org/v2/top-headlines?country=de&category=business&apiKey=447800 this.props.pageSize2b1641d1b54769cef9709b62&page=1&pageSize=${this.props.pageSize}`;
      console.log("this is componentdidmount  url");
      console.log(url);
      let data  = await fetch(url);
      console.log("this is componentdidmount data");
      console.log(data);
      let parseData =  await  data.json();
      console.log("this is componentdidmount parsedata");
      console.log(parseData);
      this.setState({articles : parseData.articles,   totalResults: parseData.totalResults})
    }


   
handleNextClick = async () =>{
  if(!(this.state.page + 1 > Math.ceil(this.state.totalResults/this.props.pageSize))) {


      console.log("Next");
      let url = `https://newsapi.org/v2/top-headlines?country=de&category=business&apiKey=447800 this.props.pageSize2b1641d1b54769cef9709b62&page=${this.state.page + 1}&pageSize=${this.props.pageSize}`;
      // let url = `https://newsdata.io/api/1/news?apikey=pub_4059365ac29b76f4321402afe  this.props.pageSizeb4b1f2d46&q=business&page=${this.state.page + 1}`;
      this.setState({loading:true});
      console.log("this is next url");
      console.log(url);
      let data  = await fetch(url);
      console.log("This is next data ");
      console.log(data);
      let parseData =  await  data.json();
      console.log( "this is next parseData");
      console.log(parseData);
    
      this.setState({
        page: this.state.page + 1,
        articles : parseData.articles,
        loading: false
      })
      console.log( "This is next page" + this.state.page);
      
    }
  }  
  handlePrevClick = async () =>{
    
    console.log("Previous");
    // let url = `https://newsdata.io/api/1/news?apikey=pub_4059365ac29b76f4321402afe  this.props.pageSizeb4b1f2d46&q=business&page=${this.state.page - 1}`;
    let url = `https://newsapi.org/v2/top-headlines?country=de&category=business&apiKey=447800 this.props.pageSize2b1641d1b54769cef9709b62&page=${this.state.page - 1}&pageSize=${this.props.pageSize}`;
    this.setState({loading:true})
     console.log( "This is previous url");
     console.log(url);
    let data  = await fetch(url);
    console.log("This is previous data");
    console.log(data);
    let parseData =  await  data.json();
    console.log("this is previous parseData");
    console.log(parseData);
    
    this.setState({
      page: this.state.page - 1,
      articles : parseData.articles,
      loading:false
    })
    }
    render() {
      console.log( "this is render");
        return <div className='container my-3'>
<h1  className='text-center'> NewsMonkey - Top Headlines</h1>
{this.state.loading && <Spinner/>}
           
            <div className='row'>
              {!this.state.loading && this.state.articles.map((element)=>{


console.log("This is element " + element);
          //  return     <div className='col-md-4'  key = {element.link}>
          //           <NewsItem title= {element.title?element.title.slice(0,45):" "} description= {element.description?element.description.slice(0,88):" "} imgUrl = {element.image_url} newsUrl = {element.link} />
          //       </div>
           return     <div className='col-md-4'  key = {element.url}>
                    <NewsItem title= {element.title?element.title.slice(0,45):" "} description= {element.description?element.description.slice(0,88):" "} imgUrl = {element.urlToImage} newsUrl = {element.url} />
                </div>
              })}
            
            </div>
            <div className = "container my-2 d-flex justify-content-between">
          
  <button disabled ={this.state.page <= 1} type="button" className="btn btn-dark" onClick = {this.handlePrevClick}> &larr; Previous</button>
  <button disabled ={this.state.page + 1 > Math.ceil(this.state.totalResults/this.props.pageSize)} type="button" className="btn btn-dark" onClick =  {this.handleNextClick}> Next &rarr;</button>
</div>

         
            
        </div>;
    }
}
