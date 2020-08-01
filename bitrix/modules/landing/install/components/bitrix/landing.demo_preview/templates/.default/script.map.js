{"version":3,"sources":["script.js"],"names":["BX","namespace","slice","Landing","Utils","proxy","bind","unbind","addClass","removeClass","isNumber","style","data","addQueryParams","getDeltaFromEvent","TemplatePreview","params","this","closeButton","document","querySelector","createButton","palette","imageContainer","loaderContainer","previewFrame","loader","Loader","messages","loaderText","IsLoadedFrame","onCreateButtonClick","onCancelButtonClick","onFrameLoad","init","getInstance","instance","prototype","children","forEach","initSelectableItem","showPreview","src","showLoader","then","createFrameIfNeeded","loadPreview","delay","hideLoader","Promise","resolve","width","containerWidth","clientWidth","height","transform","transform-origin","border","onload","show","iframe","hide","image","setTimeout","getValue","result","getCreateUrl","getAttribute","event","preventDefault","top","SidePanel","Instance","close","isStore","create","props","className","text","LANDING_LOADER_WAIT","appendChild","location","item","onSelectableItemClick","currentTarget","parentElement","href","includes"],"mappings":"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","file":""}