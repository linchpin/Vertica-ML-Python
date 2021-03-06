<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="vDataFrame[].slice">vDataFrame[].slice<a class="anchor-link" href="#vDataFrame[].slice">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vDataFrame</span><span class="p">[]</span><span class="o">.</span><span class="n">slice</span><span class="p">(</span><span class="n">length</span><span class="p">:</span> <span class="nb">int</span><span class="p">,</span> 
                   <span class="n">unit</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;second&quot;</span><span class="p">,</span> 
                   <span class="n">start</span><span class="p">:</span> <span class="nb">bool</span> <span class="o">=</span> <span class="kc">True</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Slices the vcolumn using a TS rule. The vcolumn will be transformed.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">length</div></td> <td><div class="type">int</div></td> <td><div class = "no">&#10060;</div></td> <td>Slice size.</td> </tr>
    <tr> <td><div class="param_name">unit</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Slice size unit. For example, it can be 'minute' 'hour'...</td> </tr>
    <tr> <td><div class="param_name">start</div></td> <td><div class="type">bool</div></td> <td><div class = "yes">&#10003;</div></td> <td>If set to True, the record will be sliced using the floor of the slicing instead of the ceiling.</td> </tr>
</table><h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><b>vDataFrame</b> : self.parent</p>
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[51]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.datasets</span> <span class="k">import</span> <span class="n">load_smart_meters</span>
<span class="n">sm</span> <span class="o">=</span> <span class="n">load_smart_meters</span><span class="p">()</span>
<span class="nb">print</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>val</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>time</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>id</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">0.0370000</td><td style="border: 1px solid white;">2014-01-01 01:15:00</td><td style="border: 1px solid white;">2</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">0.0800000</td><td style="border: 1px solid white;">2014-01-01 02:30:00</td><td style="border: 1px solid white;">5</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">0.0810000</td><td style="border: 1px solid white;">2014-01-01 03:00:00</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">1.4890000</td><td style="border: 1px solid white;">2014-01-01 05:00:00</td><td style="border: 1px solid white;">3</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.0720000</td><td style="border: 1px solid white;">2014-01-01 06:00:00</td><td style="border: 1px solid white;">5</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;object&gt;  Name: smart_meters, Number of rows: 11844, Number of columns: 3
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[50]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sm</span><span class="p">[</span><span class="s2">&quot;time&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">slice</span><span class="p">(</span><span class="n">length</span> <span class="o">=</span> <span class="mi">30</span><span class="p">,</span>
                 <span class="n">unit</span> <span class="o">=</span> <span class="s2">&quot;minute&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>id</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>val</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>time</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.0370000</td><td style="border: 1px solid white;">2014-01-01 01:00:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">5</td><td style="border: 1px solid white;">0.0800000</td><td style="border: 1px solid white;">2014-01-01 02:30:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0.0810000</td><td style="border: 1px solid white;">2014-01-01 03:00:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">1.4890000</td><td style="border: 1px solid white;">2014-01-01 05:00:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">5</td><td style="border: 1px solid white;">0.0720000</td><td style="border: 1px solid white;">2014-01-01 06:00:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>5</b></td><td style="border: 1px solid white;">9</td><td style="border: 1px solid white;">2.3060000</td><td style="border: 1px solid white;">2014-01-01 07:00:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>6</b></td><td style="border: 1px solid white;">4</td><td style="border: 1px solid white;">0.1020000</td><td style="border: 1px solid white;">2014-01-01 07:30:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>7</b></td><td style="border: 1px solid white;">8</td><td style="border: 1px solid white;">0.0970000</td><td style="border: 1px solid white;">2014-01-01 10:30:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>8</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0.0290000</td><td style="border: 1px solid white;">2014-01-01 11:00:00</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>9</b></td><td style="border: 1px solid white;">6</td><td style="border: 1px solid white;">0.5060000</td><td style="border: 1px solid white;">2014-01-01 11:00:00</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[50]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: smart_meters, Number of rows: 11844, Number of columns: 3</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[52]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sm</span><span class="p">[</span><span class="s2">&quot;time&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">slice</span><span class="p">(</span><span class="n">length</span> <span class="o">=</span> <span class="mi">30</span><span class="p">,</span>
                 <span class="n">unit</span> <span class="o">=</span> <span class="s2">&quot;minute&quot;</span><span class="p">,</span>
                 <span class="n">start</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>val</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>time</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>id</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">0.0370000</td><td style="border: 1px solid white;">2014-01-01 01:30:00</td><td style="border: 1px solid white;">2</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">0.0800000</td><td style="border: 1px solid white;">2014-01-01 03:00:00</td><td style="border: 1px solid white;">5</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">0.0810000</td><td style="border: 1px solid white;">2014-01-01 03:30:00</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">1.4890000</td><td style="border: 1px solid white;">2014-01-01 05:30:00</td><td style="border: 1px solid white;">3</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.0720000</td><td style="border: 1px solid white;">2014-01-01 06:30:00</td><td style="border: 1px solid white;">5</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>5</b></td><td style="border: 1px solid white;">2.3060000</td><td style="border: 1px solid white;">2014-01-01 07:30:00</td><td style="border: 1px solid white;">9</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>6</b></td><td style="border: 1px solid white;">0.1020000</td><td style="border: 1px solid white;">2014-01-01 08:00:00</td><td style="border: 1px solid white;">4</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>7</b></td><td style="border: 1px solid white;">0.0970000</td><td style="border: 1px solid white;">2014-01-01 11:00:00</td><td style="border: 1px solid white;">8</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>8</b></td><td style="border: 1px solid white;">0.0290000</td><td style="border: 1px solid white;">2014-01-01 11:30:00</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>9</b></td><td style="border: 1px solid white;">0.5060000</td><td style="border: 1px solid white;">2014-01-01 11:30:00</td><td style="border: 1px solid white;">6</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[52]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: smart_meters, Number of rows: 11844, Number of columns: 3</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="See-Also">See Also<a class="anchor-link" href="#See-Also">&#182;</a></h3><table id="seealso">
    <tr><td><a href="../date_part">vDataFrame[].date_part</a></td> <td> Extracts a specific TS field from the vcolumn.</td></tr>
</table>
</div>
</div>
</div>