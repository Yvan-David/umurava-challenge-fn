google.maps.__gjsload__('search', function(_){var nta=function(){},fD=function(a){this.setValues(a);_.Hk("search_impl")},pta=function(a){let b=_.on,c=-1;a.tiles.forEach(e=>{e.zoom>c&&(b=e.ji,c=e.zoom)});if(c===-1)return[];const d=[];a.Wu().forEach(e=>{e.a&&e.a.length>=2&&d.push(new ota(e,b,c))});return d},qta=function(a){const b=[];a.data.forEach(c=>{b.push(...pta(c))});return b};_.Ka(nta,_.pm);var rta={["1"]:{}},ota=class{constructor(a,b,c){this.nn=b;this.zoom=c;this.bounds=this.anchor=null;this.Eg=rta;this.source=a;this.featureId=this.source.id||"0";this.infoWindowOffset=(this.source.io||[]).length===2?new google.maps.Point(this.source.io[0],this.source.io[1]):null}getAnchor(){if(!this.anchor){const a=1<<this.zoom;this.anchor=_.On(new _.io((this.nn.x*256+this.source.a[0])/a,(this.nn.y*256+this.source.a[1])/a)).toJSON()}return this.anchor}getCompleteBounds(){return this.getBounds().reduce((a,
b)=>{a.extendByBounds(b);return a},_.Zn(0,0,0,0))}getBounds(){if(this.bounds===null){this.bounds=[];const a=this.source.bb||[];if(a.length%4===0)for(let b=0;b<a.length;b+=4){const c=this.bounds[this.bounds.length-1],d=_.Zn(a[b],a[b+1],a[b+2],a[b+3]);c&&c.equals(d)||this.bounds.push(d)}}return[...this.bounds]}getExtendedContent(a){if(this.Eg===rta)try{this.Eg=this.source.c?JSON.parse(this.source.c):{}}catch(b){this.Eg={}}return this.Eg[a]??{}}getFeatureName(){return this.getExtendedContent("1")?.title??
null}isTransitStation(){return this.getExtendedContent("1")?.is_transit_station??!1}};var sta=new WeakSet;_.Ka(fD,nta);fD.prototype.changed=function(){const a=this;var b=this.get("map");let c=null;b&&(c=b.__gm,b=c.get("blockingLayerCount")||0,c.set("blockingLayerCount",b+1),c.set("disableLabelingHysteresis",this.get("disableLabelingHysteresis")),c.set("tilePrefetchEnabled",this.get("tilePrefetchEnabled")));_.Hk("search_impl").then(d=>{d.Eg(a);c&&(d=c.get("blockingLayerCount")||0,c.set("blockingLayerCount",d-1))})};
fD.enableFeatureMapEventsRasterOnly=function(a){if(_.Mo[15]){var b=a.__gm.Xg;if(!sta.has(a)){sta.add(a);var c=[],d=(f,g)=>{f=pta(f);f.length&&_.P(a,g,f)},e=()=>{for(;c.length>0;)c.pop().remove();b.forEach(f=>{if(f=f.data)c.push(_.bm(f,"insert",g=>d(g,"addfeatures"))),c.push(_.bm(f,"remove",g=>d(g,"removefeatures")))})};b.addListener("insert_at",e);b.addListener("remove_at",e);b.addListener("set_at",e);e()}(()=>{const f=[];b.forEach(g=>{f.push(...qta(g))});f.length&&_.P(a,"addfeatures",f)})()}};
_.Ha("module$contents$mapsapi$onionLayers$search$googleLayer_GoogleLayer.enableFeatureMapEventsRasterOnly",fD.enableFeatureMapEventsRasterOnly);_.Qm(fD.prototype,{map:_.Kq});_.ra.google.maps.search={GoogleLayer:fD};_.Ik("search",{});});
