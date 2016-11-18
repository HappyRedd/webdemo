var book={
  __year:2016,
  edition:2
};
Object.defineProperty(book,"year",{
  get:function(){
    return this.__year;
  },
  set:function(newValue){
    if(newValue!==2016){
      this.__year=newValue;
      this.edition+=newValue-2016;
    }
  }
});
book.__year=2017;
alert(book.edition);
