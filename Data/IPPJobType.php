/*******************************************************************************
* Copyright 2016 Intuit
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*******************************************************************************/
<?php
require_once('IPPIntuitEntity.php');

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType IntuitEntity
 * @xmlName IPPJobType
 * @var IPPJobType
 * @xmlDefinition 
				Product: ALL
				Description: Job types allow for categorizing jobs so that similar jobs can be grouped and subtotaled on reports. Ultimately, they will help in determining which jobs are most profitable for the business.
			
 */
class IPPJobType
	extends IPPIntuitEntity	{

		/**                                                                       
		* Initializes this object, optionally with pre-defined property values    
		*                                                                         
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.                      
		*                                                                         
		* @param dictionary $keyValInitializers key/value pairs to be populated into object's properties 
		* @param boolean $verbose specifies whether object should echo warnings   
		*/                                                                        
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPJobType',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}

	
	/**
	 * @Definition 
								Product: QBW
								Description: User recognizable name for the Job Type.[br /]Max. length: 31 characters.
								Product: QBO
								Description: User recognizable name for the Job Type.[br /]Max. length: 15 characters.
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Name
	 * @var string
	 */
	public $Name;
	/**
	 * @Definition 
								Product: ALL
								Description: Reference to the JobTypeParent entity.
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName ParentRef
	 * @var com\intuit\schema\finance\v3\IPPReferenceType
	 */
	public $ParentRef;
	/**
	 * @Definition 
								Product: ALL
								Description: Fully qualified name of the entity. The fully qualified name prepends the topmost parent, followed by each sub element separated by colons. Takes the form of Parent:Customer:Job:Sub-job. Limited to 5 levels.[br /]Max. length: 41 characters (single name) or 209 characters (fully qualified name).
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName FullyQualifiedName
	 * @var string
	 */
	public $FullyQualifiedName;
	/**
	 * @Definition 
								Product: ALL
								Description: True if the Job is active. Inactive job types may be hidden from display and may not be used on financial transactions.
								Filterable: QBW
							
	 * @xmlType element
	 * @xmlNamespace http://schema.intuit.com/finance/v3
	 * @xmlMinOccurs 0
	 * @xmlName Active
	 * @var boolean
	 */
	public $Active;


} // end class IPPJobType
