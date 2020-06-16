<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="lift_chart">lift_chart<a class="anchor-link" href="#lift_chart">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">lift_chart</span><span class="p">(</span><span class="n">y_true</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> 
           <span class="n">y_score</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> 
           <span class="n">input_relation</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span>
           <span class="n">cursor</span> <span class="o">=</span> <span class="kc">None</span><span class="p">,</span>
           <span class="n">pos_label</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> 
           <span class="n">nbins</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">1000</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Draws the Lift Chart.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">y_true</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Response column.</td> </tr>
    <tr> <td><div class="param_name">y_score</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Prediction Probability.</td> </tr>
    <tr> <td><div class="param_name">input_relation</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Relation used to do the scoring. The relation can be a view or a table or even a customized relation. For example, you could write: "(SELECT ... FROM ...) x" as long as an alias is given at the end of the relation.</td> </tr>
    <tr> <td><div class="param_name">cursor</div></td> <td><div class="type">DBcursor</div></td> <td><div class = "yes">&#10003;</div></td> <td>Vertica DB cursor.</td> </tr>
    <tr> <td><div class="param_name">pos_label</div></td> <td><div class="type">int / float / str</div></td> <td><div class = "yes">&#10003;</div></td> <td>To compute the Lift Chart, one of the response column class has to be the positive one. The parameter 'pos_label' represents this class.</td> </tr>
    <tr> <td><div class="param_name">nbins</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>Curve number of bins.</td> </tr>
</table><h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><a href="../../utilities/tablesample/index.php">tablesample</a> : An object containing the result. For more information, check out <a href="../../utilities/tablesample/index.php">utilities.tablesample</a>.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[6]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python</span> <span class="k">import</span> <span class="n">vDataFrame</span>
<span class="n">vDataFrame</span><span class="p">(</span><span class="s2">&quot;example_classification&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>y_score</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>y_pred</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>y_true</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">0.261992636494471</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">0.271766949212011</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">0.281715565124816</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">0.287704603820825</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.293503745589547</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[6]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: example_classification, Number of rows: 1234, Number of columns: 3</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[18]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.plot</span> <span class="k">import</span> <span class="n">lift_chart</span>
<span class="n">lift_chart</span><span class="p">(</span><span class="s2">&quot;y_true&quot;</span><span class="p">,</span> <span class="s2">&quot;y_score&quot;</span><span class="p">,</span> <span class="s2">&quot;example_classification&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>