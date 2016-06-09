<div class="form-group">
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="continuing_education" id="continuing_education">
                <label for="continuing_education">Continuing education</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="government_contracting" id="government_contracting">
                <label for="government_contracting">Government contracting</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="importing_exporting" id="importing_exporting">
                <label for="importing_exporting">Importing/exporting</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="starting_business" id="starting_business">
                <label for="starting_business" >Starting a business</label>
            </li>

            <li>
                <input name="attribute[]" type="checkbox" value="strategic_planning" id="strategic_planning">
                <label for="strategic_planning">Strategic planning</label>
            </li>
        </div>
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="building_business_plan" id="building_business_plan">
                <label for="building_business_plan">Building a business plan</label>
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
                <input name="attribute[]" type="checkbox" value="site_selection" id="site_selection">
                <label for="site_selection">Site selection</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="marketing" id="marketing">
                <label for="marketing">Marketing</label>
            </li>
        </div>
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="social_media" id="social_media">
                <label for="social_media">Social media</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="technology" id="technology">
                <label for="technology">Technology</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="connectivity" id="connectivity">
                <label for="connectivity">Connectivity</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="cybersecurity" id="cybersecurity">
                <label for="cybersecurity">Cybersecurity</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="financial_assistance" id="financial_assistance">
                <label for="financial_assistance">Financial assistance</label>
            </li>
        </div>
        <div class="row-md-3 col-md-3">
            <li>
                <input name="attribute[]" type="checkbox" value="financial_planning" id="financial_planning">
                <label for="financial_planning">Financial planning</label>
            </li>
            <li>
                <input name="attribute[]" type="checkbox" value="legal_aid" id="legal_aid">
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
                <input name="attribute[]" type="checkbox" value="succession_planning" id="succession_planning">
                <label for="succession_planning">Succession planning</label>
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