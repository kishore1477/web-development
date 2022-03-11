import React, { Component } from 'react';

export default class NewsItem extends Component {

    render() {
      let   {title, description, imgUrl,newsUrl} = this.props
    return <div className='my-3'> 
<div className="card" style={{width: '18rem'}}>
  <img src={!imgUrl?"https:ichef.bbci.co.uk/news/1024/branded_news/77E3/production/_123019603_visible_transient_marked-1024x615.jpg":imgUrl} className="card-img-top" alt="..." />
  <div className="card-body">
    <h5 className="card-title">{title}...</h5>
    <p className="card-text"> {description}...</p>
    <a   rel="noreferrer"  href={newsUrl} target= "_blank" className="btn btn-sm btn-dark"> Read more</a>
    {/* rel="noreferrer" */}
  </div>
</div>

    </div>;
  }
}
