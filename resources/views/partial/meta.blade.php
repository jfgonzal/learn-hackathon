<div class="form-group">
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="continuing-education" id="continuing-education">
                <label for="continuing-education" id="continuing-education">Continuing education</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="government-contracting" id="government-contracting">
                <label for="government-contracting">Government contracting</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="importing-exporting" id="importing-exporting">
                <label for="importing-exporting">Importing/exporting</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="starting-a-business" id="starting-a-business">
                <label for="starting-a-business" >Starting a business</label>
            </li>

            <li>
                <input name="attribute[]" type="checkbox" value="strategic-planning" id="strategic-planning">
                <label for="strategic-planning">Strategic planning</label>
            </li>
        </div>
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="building-a-business-plan" id="building-a-business-plan">
                <label for="building-a-business-plan">Building a business plan</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="hiring" id="hiring">
                <label for="hiring">Hiring</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="insurance" id="insurance">
                <label for="insurance">Insurance</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="site-selection" id="site-selection">
                <label for="site-selection">Site selection</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="marketing" id="marketing">
                <label for="marketing">Marketing</label>
            </li>
        </div>
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="social-media" id="social-media">
                <label for="social-media">Social media</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="technology" id="technology">
                <label for="technology">Technology</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="connectivity" id="connectivity">
                <label for="connectivity" id="connectivity">Connectivity</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="cybersecurity" id="cybersecurity">
                <label for="cybersecurity" id="cybersecurity">Cybersecurity</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="financial-assistance" id="financial-assistance">
                <label for="financial-assistance" id="financial-assistance">Financial assistance</label>
            </li>
        </div>
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="financial-planning" id="financial-planning">
                <label for="financial-planning">Financial planning</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="legal-aid" id="legal-aid">
                <label for="legal-aid" id="legal-aid">Legal aid</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="trademark" id="trademark">
                <label for="trademark">Trademark</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="permitting" id="permitting">
                <label for="permitting">Permitting</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="succession-planning" id="succession-planning">
                <label for="succession-planning">Succession planning</label>
            </li>
        </div>
        <div class="row-md-12 col-md-12">
        <li>
            <input name="attribute[]" type="checkbox" value="other" id="other">
            <label for="other">Other</label>
        </li>
            <label for="other_text">Please Explain</label>
            <textarea class="form-control" rows="8" name="other_text" id="other_text">
                {{ old('other_text') }}
            </textarea>
    </div>
</div>